(function() {
	'use strict';

	if (typeof rrweb === 'undefined') return;

	var config = window.saConfig || {};
	var apiUrl = config.apiUrl || '/wp-json/sa/v1/';
	var nonce = config.nonce || '';
	var replaySample = config.replaySample || 10;

	if (Math.random() * 100 > replaySample) return;

	var session = window.saSession;
	if (!session) return;

	var events = [];
	var chunkTimer = null;
	var startTime = Date.now();
	var stopRecording = false;

	function sendChunk() {
		if (events.length === 0 || stopRecording) return;

		var batch = events.splice(0, 100);
		var xhr = new XMLHttpRequest();
		xhr.open('POST', apiUrl + 'track/replay-chunk', true);
		xhr.setRequestHeader('Content-Type', 'application/json');
		xhr.setRequestHeader('X-WP-Nonce', nonce);
		xhr.send(JSON.stringify({
			session_id: session.getId(),
			visitor_id: session.getVisitorId(),
			events: batch,
			duration: Math.round((Date.now() - startTime) / 1000),
			page_url: window.location.href,
			device: getDeviceType(),
			browser: getBrowserInfo(),
			started_at: new Date(startTime).toISOString()
		}));
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

	function startRecording() {
		var maxDuration = 5 * 60 * 1000;

		var stop = rrweb.record({
			maskAllInputs: true,
			maskTextSelector: '.sensitive, input[type="password"], input[type="email"], input[type="tel"]',
			blockSelector: '.sa-no-record, .sa-private',
			slimDOMOptions: {
				script: true,
				comment: true,
				headFavicon: true,
				headWhitespace: true,
				doctype: true,
				footScript: true
			},
			inputOptions: {
				password: true
			},
			collectFonts: false,
			recordCanvas: false,
			recordCrossOriginIframes: false,
			plugins: [],
			sampling: {
				fps: 5,
				mutationInterval: 100
			}
		});

		chunkTimer = setInterval(function() {
			sendChunk();
		}, 5000);

		setTimeout(function() {
			stopRecording = true;
			if (stop) stop();
			if (chunkTimer) clearInterval(chunkTimer);
			sendChunk();
		}, maxDuration);

		document.addEventListener('visibilitychange', function() {
			if (document.hidden) sendChunk();
		});

		window.addEventListener('beforeunload', function() {
			sendChunk();
		});
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', startRecording);
	} else {
		startRecording();
	}
})();
