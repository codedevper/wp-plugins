(function() {
	'use strict';

	var config = window.saConfig || {};
	var apiUrl = config.apiUrl || '/wp-json/sa/v1/';
	var nonce = config.nonce || '';
	var sessionTimeout = (config.sessionTimeout || 30) * 60 * 1000;
	var samplingRate = config.samplingRate || 100;

	if (Math.random() * 100 > samplingRate) {
		return;
	}

	var eventQueue = [];
	var sendTimer = null;
	var sessionId = null;
	var visitorId = null;

	function generateId() {
		return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
			var r = Math.random() * 16 | 0;
			var v = c === 'x' ? r : (r & 0x3 | 0x8);
			return v.toString(16);
		});
	}

	function getCookie(name) {
		var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
		return match ? match[2] : null;
	}

	function setCookie(name, value, days) {
		var expires = '';
		if (days) {
			var date = new Date();
			date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
			expires = '; expires=' + date.toUTCString();
		}
		document.cookie = name + '=' + value + expires + '; path=/; SameSite=Lax';
	}

	function getSessionId() {
		var stored = getCookie('sa_session');
		if (stored) {
			var parts = stored.split('|');
			var timestamp = parseInt(parts[1], 10);
			if (Date.now() - timestamp < sessionTimeout) {
				setCookie('sa_session', parts[0] + '|' + Date.now(), 1);
				return parts[0];
			}
		}

		var id = generateId();
		setCookie('sa_session', id + '|' + Date.now(), 1);
		return id;
	}

	function getVisitorId() {
		var stored = getCookie('sa_visitor');
		if (stored) return stored;

		var id = generateId();
		setCookie('sa_visitor', id, 365);
		return id;
	}

	function getDeviceType() {
		var w = window.innerWidth;
		if (w <= 768) return 'mobile';
		if (w <= 1024) return 'tablet';
		return 'desktop';
	}

	function getBrowserInfo() {
		var ua = navigator.userAgent;
		if (ua.indexOf('Firefox') > -1) return 'Firefox';
		if (ua.indexOf('Edg') > -1) return 'Edge';
		if (ua.indexOf('Chrome') > -1) return 'Chrome';
		if (ua.indexOf('Safari') > -1) return 'Safari';
		return 'Other';
	}

	function getOSInfo() {
		var ua = navigator.userAgent;
		if (ua.indexOf('Win') > -1) return 'Windows';
		if (ua.indexOf('Mac') > -1) return 'macOS';
		if (ua.indexOf('Linux') > -1) return 'Linux';
		if (ua.indexOf('Android') > -1) return 'Android';
		if (ua.indexOf('iOS') > -1 || ua.indexOf('iPhone') > -1) return 'iOS';
		return 'Other';
	}

	function getUTMParams() {
		var params = new URLSearchParams(window.location.search);
		return {
			utm_source: params.get('utm_source') || '',
			utm_medium: params.get('utm_medium') || '',
			utm_campaign: params.get('utm_campaign') || '',
			utm_term: params.get('utm_term') || '',
			utm_content: params.get('utm_content') || ''
		};
	}

	function getSelector(el) {
		if (!el || el === document.body) return 'body';
		if (el.id) return '#' + el.id;

		var path = [];
		while (el && el.nodeType === Node.ELEMENT_NODE) {
			var selector = el.nodeName.toLowerCase();
			if (el.className && typeof el.className === 'string') {
				var classes = el.className.trim().split(/\s+/).filter(function(c) {
					return c && !c.match(/^(sa-|wp-|admin)/);
				}).slice(0, 2);
				if (classes.length) {
					selector += '.' + classes.join('.');
				}
			}
			path.unshift(selector);
			el = el.parentNode;
		}
		return path.join(' > ');
	}

	function getElementText(el) {
		if (!el) return '';
		var text = el.textContent || '';
		return text.trim().substring(0, 200);
	}

	function sendEvents() {
		if (eventQueue.length === 0) return;

		var batch = eventQueue.splice(0, 50);
		var xhr = new XMLHttpRequest();
		xhr.open('POST', apiUrl + 'track', true);
		xhr.setRequestHeader('Content-Type', 'application/json');
		xhr.setRequestHeader('X-WP-Nonce', nonce);
		xhr.send(JSON.stringify({ events: batch }));
	}

	function queueEvent(type, data) {
		var event = {
			session_id: sessionId,
			type: type,
			url: window.location.href,
			title: document.title,
			viewport: {
				width: window.innerWidth,
				height: window.innerHeight
			},
			timestamp: Date.now()
		};

		for (var key in data) {
			if (data.hasOwnProperty(key)) {
				event[key] = data[key];
			}
		}

		eventQueue.push(event);

		if (!sendTimer) {
			sendTimer = setTimeout(function() {
				sendEvents();
				sendTimer = null;
			}, 5000);
		}
	}

	function trackPageview() {
		var utm = getUTMParams();
		var hasUTM = utm.utm_source || utm.utm_medium || utm.utm_campaign;

		queueEvent('pageview', {
			visitor_id: visitorId,
			user_agent: navigator.userAgent,
			device: getDeviceType(),
			browser: getBrowserInfo(),
			os: getOSInfo(),
			language: navigator.language || '',
			referrer: document.referrer || '',
			utm: hasUTM ? utm : null
		});
	}

	function trackClick(e) {
		var el = e.target;
		var rect = el.getBoundingClientRect();

		queueEvent('click', {
			element: {
				tag: el.tagName.toLowerCase(),
				selector: getSelector(el),
				text: getElementText(el)
			},
			click: {
				x: Math.round(e.clientX),
				y: Math.round(e.clientY)
			}
		});
	}

	var maxScrollDepth = 0;

	function trackScroll() {
		var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
		var docHeight = document.documentElement.scrollHeight - window.innerHeight;
		var depth = docHeight > 0 ? Math.round((scrollTop / docHeight) * 100) : 0;

		if (depth > maxScrollDepth) {
			maxScrollDepth = depth;
		}
	}

	function trackScrollEnd() {
		if (maxScrollDepth > 0) {
			queueEvent('scroll', { scroll_depth: maxScrollDepth });
			maxScrollDepth = 0;
		}
	}

	function trackOutbound(e) {
		var link = e.target.closest('a');
		if (!link) return;

		var href = link.href;
		if (!href) return;

		try {
			var url = new URL(href);
			var current = new URL(window.location.href);

			if (url.hostname !== current.hostname) {
				queueEvent('outbound', {
					element: {
						tag: 'a',
						selector: getSelector(link),
						text: getElementText(link)
					},
					meta: { href: href }
				});
			}
		} catch (err) {}
	}

	function trackFileDownload(e) {
		var link = e.target.closest('a');
		if (!link) return;

		var href = link.href;
		if (!href) return;

		var extensions = /\.(pdf|docx?|xlsx?|pptx?|zip|rar|csv|mp[34]|avi|mov|wmv)$/i;
		if (extensions.test(href)) {
			queueEvent('download', {
				element: {
					tag: 'a',
					selector: getSelector(link),
					text: getElementText(link)
				},
				meta: { href: href }
			});
		}
	}

	function trackVisibility() {
		if (document.hidden) {
			trackScrollEnd();
			sendEvents();
		}
	}

	function trackUnload() {
		trackScrollEnd();
		sendEvents();

		if (navigator.sendBeacon) {
			var batch = eventQueue.splice(0, 50);
			if (batch.length > 0) {
				var blob = new Blob([JSON.stringify({ events: batch })], { type: 'application/json' });
				navigator.sendBeacon(apiUrl + 'track', blob);
			}
		}
	}

	function initTracking() {
		sessionId = getSessionId();
		visitorId = getVisitorId();

		trackPageview();

		document.addEventListener('click', trackClick, true);
		document.addEventListener('click', trackOutbound, true);
		document.addEventListener('click', trackFileDownload, true);
		window.addEventListener('scroll', trackScroll, true);
		window.addEventListener('scrollend', trackScrollEnd, true);
		document.addEventListener('visibilitychange', trackVisibility);
		window.addEventListener('beforeunload', trackUnload);

		if (window.history && window.history.pushState) {
			var originalPushState = window.history.pushState;
			window.history.pushState = function() {
				originalPushState.apply(this, arguments);
				setTimeout(function() {
					trackScrollEnd();
					trackPageview();
				}, 100);
			};

			window.addEventListener('popstate', function() {
				trackScrollEnd();
				setTimeout(trackPageview, 100);
			});
		}

		setInterval(function() {
			queueEvent('heartbeat', {});
			sendEvents();
		}, 30000);
	}

	window.saConvert = function(name, value, meta) {
		queueEvent('conversion', {
			name: name,
			value: value || 0,
			meta: meta || {}
		});

		if (window.saHeatmap) {
			window.saHeatmap.trackConversion(name, value, meta);
		}
	};

	window.saTrack = function(eventName, data) {
		queueEvent('custom', {
			name: eventName,
			meta: data || {}
		});
	};

	window.saSession = {
		getId: function() { return sessionId; },
		getVisitorId: function() { return visitorId; }
	};

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initTracking);
	} else {
		initTracking();
	}
})();

saConvert('purchase', 99.99, {
    product: 'Product Name',
    category: 'Category'
});