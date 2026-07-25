(function() {
	'use strict';

	var config = window.saConfig || {};
	var apiUrl = config.apiUrl || '/wp-json/sa/v1/';
	var nonce = config.nonce || '';

	var clickQueue = [];
	var sendTimer = null;

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

	function getDeviceType() {
		var w = window.innerWidth;
		if (w <= 768) return 'mobile';
		if (w <= 1024) return 'tablet';
		return 'desktop';
	}

	function sendClicks() {
		if (clickQueue.length === 0) return;

		var batch = clickQueue.splice(0, 30);
		var xhr = new XMLHttpRequest();
		xhr.open('POST', apiUrl + 'track/click', true);
		xhr.setRequestHeader('Content-Type', 'application/json');
		xhr.setRequestHeader('X-WP-Nonce', nonce);
		xhr.send(JSON.stringify({ clicks: batch }));
	}

	function trackClick(e) {
		var session = window.saSession;
		if (!session) return;

		var el = e.target;

		clickQueue.push({
			session_id: session.getId(),
			url: window.location.href,
			x: Math.round(e.clientX),
			y: Math.round(e.clientY),
			viewport_width: window.innerWidth,
			viewport_height: window.innerHeight,
			selector: getSelector(el),
			device: getDeviceType()
		});

		if (!sendTimer) {
			sendTimer = setTimeout(function() {
				sendClicks();
				sendTimer = null;
			}, 5000);
		}
	}

	function trackConversion(name, value, meta) {
		var session = window.saSession;
		if (!session) return;

		var xhr = new XMLHttpRequest();
		xhr.open('POST', apiUrl + 'track/conversion', true);
		xhr.setRequestHeader('Content-Type', 'application/json');
		xhr.setRequestHeader('X-WP-Nonce', nonce);
		xhr.send(JSON.stringify({
			session_id: session.getId(),
			name: name,
			value: value || 0,
			url: window.location.href,
			meta: meta || {}
		}));
	}

	function init() {
		document.addEventListener('click', trackClick, true);

		document.addEventListener('visibilitychange', function() {
			if (document.hidden) sendClicks();
		});

		window.addEventListener('beforeunload', function() {
			sendClicks();
		});
	}

	window.saHeatmap = {
		trackConversion: trackConversion
	};

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}
})();
