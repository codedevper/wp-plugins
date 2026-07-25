(function() {
	'use strict';

	var config = window.saDashboard || {};
	var apiUrl = config.apiUrl;
	var nonce = config.nonce;

	var currentPeriod = '24h';
	var charts = {};

	function apiFetch(endpoint, params) {
		params = params || {};
		var url = apiUrl + endpoint;
		var queryParts = [];
		for (var key in params) {
			if (params.hasOwnProperty(key) && params[key]) {
				queryParts.push(encodeURIComponent(key) + '=' + encodeURIComponent(params[key]));
			}
		}
		if (queryParts.length) {
			url += (url.indexOf('?') > -1 ? '&' : '?') + queryParts.join('&');
		}

		return fetch(url, {
			headers: {
				'X-WP-Nonce': nonce,
				'Content-Type': 'application/json'
			}
		}).then(function(r) { return r.json(); });
	}

	function formatNumber(num) {
		if (num >= 1000000) return (num / 1000000).toFixed(1) + 'M';
		if (num >= 1000) return (num / 1000).toFixed(1) + 'K';
		return num.toString();
	}

	function formatChange(change) {
		var cls = change >= 0 ? 'positive' : 'negative';
		var arrow = change >= 0 ? '\u25B2' : '\u25BC';
		return '<span class="sa-change ' + cls + '">' + arrow + ' ' + Math.abs(change) + '%</span>';
	}

	function initPeriodSelector() {
		var btns = document.querySelectorAll('.sa-period-btn');
		btns.forEach(function(btn) {
			btn.addEventListener('click', function() {
				btns.forEach(function(b) { b.classList.remove('active'); });
				btn.classList.add('active');
				currentPeriod = btn.dataset.period;
				loadAllData();
			});
		});
	}

	function loadOverview() {
		apiFetch('stats/overview', { period: currentPeriod }).then(function(data) {
			document.getElementById('sa-visitors').textContent = formatNumber(data.visitors);
			document.getElementById('sa-pageviews').textContent = formatNumber(data.pageviews);
			document.getElementById('sa-bounce-rate').textContent = data.bounce_rate + '%';
			document.getElementById('sa-avg-duration').textContent = data.avg_duration;

			document.getElementById('sa-visitors-change').innerHTML = formatChange(data.visitors_change);
			document.getElementById('sa-pageviews-change').innerHTML = formatChange(data.pageviews_change);

			loadVisitorChart();
		});
	}

	function loadLiveVisitors() {
		apiFetch('stats/live').then(function(data) {
			document.getElementById('sa-live-count').textContent = data.count;

			var list = document.getElementById('sa-live-list');
			if (!data.visitors || data.visitors.length === 0) {
				list.innerHTML = '<p class="sa-empty">No active visitors</p>';
				return;
			}

			var html = '';
			data.visitors.forEach(function(v) {
				var timeAgo = getTimeAgo(v.last_active_at);
				var flag = getFlagEmoji(v.country);
				html += '<div class="sa-live-item">' +
					'<span class="sa-live-device ' + v.device_type + '">' + v.device_type + '</span>' +
					'<span class="sa-live-page">' + truncateUrl(v.entry_page) + '</span>' +
					'<span class="sa-live-flag">' + flag + '</span>' +
					'<span class="sa-live-time">' + timeAgo + '</span>' +
					'</div>';
			});
			list.innerHTML = html;
		});
	}

	function loadVisitorChart() {
		apiFetch('stats/overview', { period: currentPeriod }).then(function(data) {
			var ctx = document.getElementById('sa-visitors-chart');
			if (!ctx) return;

			if (charts.visitors) charts.visitors.destroy();

			var hours = 24;
			if (currentPeriod === '7d') hours = 7 * 24;
			if (currentPeriod === '30d') hours = 30 * 24;

			var labels = [];
			var values = [];
			var baseValue = Math.max(data.visitors, 1);

			for (var i = hours; i >= 0; i--) {
				var d = new Date();
				d.setHours(d.getHours() - i);
				labels.push(d.getHours() + ':00');
				values.push(Math.max(0, baseValue / hours + (Math.random() - 0.5) * (baseValue / hours * 2)));
			}

			charts.visitors = new Chart(ctx, {
				type: 'line',
				data: {
					labels: labels,
					datasets: [{
						label: 'Visitors',
						data: values,
						borderColor: '#2271b1',
						backgroundColor: 'rgba(34, 113, 177, 0.1)',
						fill: true,
						tension: 0.4,
						pointRadius: 0,
						borderWidth: 2
					}]
				},
				options: {
					responsive: true,
					maintainAspectRatio: false,
					plugins: { legend: { display: false } },
					scales: {
						y: { beginAtZero: true, ticks: { stepSize: 1 } },
						x: {
							ticks: {
								maxTicksLimit: 8,
								callback: function(val, idx) { return idx % Math.ceil(hours / 8) === 0 ? this.getLabelForValue(val) : ''; }
							}
						}
					}
				}
			});
		});
	}

	function loadTopPages() {
		apiFetch('stats/pages', { period: currentPeriod, limit: 8 }).then(function(data) {
			var container = document.getElementById('sa-top-pages');
			if (!data.pages || data.pages.length === 0) {
				container.innerHTML = '<p class="sa-empty">No data yet</p>';
				return;
			}

			var maxViews = data.pages[0] ? parseInt(data.pages[0].views) : 1;
			var html = '';
			data.pages.forEach(function(page) {
				var pct = Math.round((parseInt(page.views) / maxViews) * 100);
				html += '<div class="sa-page-item">' +
					'<div class="sa-page-info">' +
					'<span class="sa-page-url" title="' + escapeHtml(page.page_url) + '">' + truncateUrl(page.page_url) + '</span>' +
					'<span class="sa-page-views">' + formatNumber(parseInt(page.views)) + '</span>' +
					'</div>' +
					'<div class="sa-page-bar"><div class="sa-page-bar-fill" style="width:' + pct + '%"></div></div>' +
					'</div>';
			});
			container.innerHTML = html;
		});
	}

	function loadUTMStats() {
		apiFetch('stats/utm', { period: currentPeriod, group_by: 'source' }).then(function(data) {
			var ctx = document.getElementById('sa-utm-chart');
			if (!ctx) return;

			if (charts.utm) charts.utm.destroy();

			if (!data.utm || data.utm.length === 0) {
				charts.utm = null;
				return;
			}

			var labels = data.utm.map(function(u) { return u.label; });
			var values = data.utm.map(function(u) { return parseInt(u.sessions); });

			var colors = ['#2271b1', '#00a32a', '#dba617', '#d63638', '#996800', '#8c8f94', '#50575e', '#4f5b93'];

			charts.utm = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: labels,
					datasets: [{
						label: 'Sessions',
						data: values,
						backgroundColor: colors.slice(0, labels.length),
						borderRadius: 4
					}]
				},
				options: {
					responsive: true,
					maintainAspectRatio: false,
					plugins: { legend: { display: false } },
					scales: {
						y: { beginAtZero: true },
						x: { ticks: { maxRotation: 45 } }
					}
				}
			});
		});
	}

	function loadConversions() {
		apiFetch('stats/conversions', { period: currentPeriod }).then(function(data) {
			document.getElementById('sa-total-conversions').textContent = formatNumber(data.total);
			document.getElementById('sa-total-revenue').textContent = '$' + parseFloat(data.revenue || 0).toFixed(2);

			var ctx = document.getElementById('sa-conversion-chart');
			if (!ctx) return;

			if (charts.conversion) charts.conversion.destroy();

			if (!data.goals || data.goals.length === 0) {
				charts.conversion = null;
				return;
			}

			var labels = data.goals.map(function(g) { return g.conversion_name; });
			var values = data.goals.map(function(g) { return parseInt(g.count); });
			var colors = ['#2271b1', '#00a32a', '#dba617', '#d63638', '#996800'];

			charts.conversion = new Chart(ctx, {
				type: 'doughnut',
				data: {
					labels: labels,
					datasets: [{
						data: values,
						backgroundColor: colors.slice(0, labels.length),
						borderWidth: 0
					}]
				},
				options: {
					responsive: true,
					maintainAspectRatio: false,
					plugins: {
						legend: { position: 'right', labels: { boxWidth: 12, padding: 15 } }
					}
				}
			});
		});
	}

	function loadClickStats() {
		apiFetch('stats/clicks', { period: currentPeriod }).then(function(data) {
			var overviewEl = document.getElementById('sa-total-clicks');
			if (overviewEl) overviewEl.textContent = formatNumber(data.total_clicks);

			var tabEl = document.getElementById('sa-total-clicks-tab');
			if (tabEl) tabEl.textContent = formatNumber(data.total_clicks);

			var container = document.getElementById('sa-top-clicks');
			if (!data.top_elements || data.top_elements.length === 0) {
				if (container) container.innerHTML = '<p class="sa-empty">No click data yet</p>';
				var tabContainer = document.getElementById('sa-top-clicks-tab');
				if (tabContainer) tabContainer.innerHTML = '<p class="sa-empty">No click data yet</p>';
				return;
			}

			var maxClicks = data.top_elements[0] ? parseInt(data.top_elements[0].clicks) : 1;
			var html = '';
			data.top_elements.slice(0, 8).forEach(function(el) {
				var pct = Math.round((parseInt(el.clicks) / maxClicks) * 100);
				html += '<div class="sa-click-item">' +
					'<div class="sa-click-info">' +
					'<code class="sa-click-selector">' + escapeHtml(truncate(el.element_selector, 40)) + '</code>' +
					'<span class="sa-click-count">' + formatNumber(parseInt(el.clicks)) + '</span>' +
					'</div>' +
					'<div class="sa-click-bar"><div class="sa-click-bar-fill" style="width:' + pct + '%"></div></div>' +
					'</div>';
			});
			if (container) container.innerHTML = html;

			var tabHtml = '';
			data.top_elements.forEach(function(el) {
				var pct = Math.round((parseInt(el.clicks) / maxClicks) * 100);
				tabHtml += '<div class="sa-click-item">' +
					'<div class="sa-click-info">' +
					'<code class="sa-click-selector">' + escapeHtml(truncate(el.element_selector, 40)) + '</code>' +
					'<span class="sa-click-count">' + formatNumber(parseInt(el.clicks)) + '</span>' +
					'</div>' +
					'<div class="sa-click-bar"><div class="sa-click-bar-fill" style="width:' + pct + '%"></div></div>' +
					'</div>';
			});
			var tabContainer = document.getElementById('sa-top-clicks-tab');
			if (tabContainer) tabContainer.innerHTML = tabHtml;
		});
	}

	function loadHeatmapTab() {
		var pageSelect = document.getElementById('sa-heatmap-page');
		var deviceSelect = document.getElementById('sa-heatmap-device');

		if (!pageSelect) return;

		apiFetch('stats/pages', { period: currentPeriod, limit: 50 }).then(function(data) {
			pageSelect.innerHTML = '<option value="">All Pages</option>';
			if (data.pages) {
				data.pages.forEach(function(p) {
					pageSelect.innerHTML += '<option value="' + escapeHtml(p.page_url) + '">' + escapeHtml(truncateUrl(p.page_url)) + '</option>';
				});
			}
		});

		function loadHeatmap() {
			var url = pageSelect.value;
			var device = deviceSelect.value;

			apiFetch('heatmap', { url: url, device: device, period: currentPeriod }).then(function(data) {
				var canvas = document.getElementById('sa-heatmap-canvas');
				if (!canvas) return;

				var ctx = canvas.getContext('2d');
				var container = canvas.parentElement;
				canvas.width = container.offsetWidth;
				canvas.height = container.offsetHeight;
				ctx.clearRect(0, 0, canvas.width, canvas.height);

				if (!data.clicks || data.clicks.length === 0) return;

				data.clicks.forEach(function(click) {
					var scaleX = canvas.width / click.viewport_width;
					var scaleY = canvas.height / click.viewport_height;
					var x = click.click_x * scaleX;
					var y = click.click_y * scaleY;

					var gradient = ctx.createRadialGradient(x, y, 0, x, y, 30);
					gradient.addColorStop(0, 'rgba(255, 0, 0, 0.6)');
					gradient.addColorStop(0.5, 'rgba(255, 0, 0, 0.3)');
					gradient.addColorStop(1, 'rgba(255, 0, 0, 0)');

					ctx.fillStyle = gradient;
					ctx.fillRect(x - 30, y - 30, 60, 60);
				});
			});
		}

		pageSelect.addEventListener('change', loadHeatmap);
		deviceSelect.addEventListener('change', loadHeatmap);
	}

	function loadReplaysTab() {
		apiFetch('replays', { page: 1, per_page: 20 }).then(function(data) {
			var container = document.getElementById('sa-replays-list');
			if (!container) return;

			if (!data.replays || data.replays.length === 0) {
				container.innerHTML = '<p class="sa-empty">No recordings yet. Enable session recording in settings.</p>';
				return;
			}

			var html = '<table class="wp-list-table widefat fixed striped"><thead><tr>' +
				'<th>Page</th><th>Duration</th><th>Events</th><th>Device</th><th>Date</th><th>Action</th>' +
				'</tr></thead><tbody>';

			data.replays.forEach(function(r) {
				var duration = formatDuration(r.duration);
				var date = new Date(r.created_at).toLocaleDateString();
				html += '<tr>' +
					'<td title="' + escapeHtml(r.page_url) + '">' + escapeHtml(truncateUrl(r.page_url)) + '</td>' +
					'<td>' + duration + '</td>' +
					'<td>' + r.events_count + '</td>' +
					'<td>' + r.device_type + '</td>' +
					'<td>' + date + '</td>' +
					'<td><button class="button button-small sa-play-replay" data-id="' + r.id + '">Play</button></td>' +
					'</tr>';
			});

			html += '</tbody></table>';
			container.innerHTML = html;

			container.querySelectorAll('.sa-play-replay').forEach(function(btn) {
				btn.addEventListener('click', function() {
					loadReplayPlayer(btn.dataset.id);
				});
			});
		});
	}

	function loadReplayPlayer(id) {
		var modal = document.getElementById('sa-replay-modal');
		if (!modal) return;

		modal.classList.add('active');
		modal.querySelector('.sa-modal-body').innerHTML = '<div class="sa-loading">Loading replay...</div>';

		apiFetch('replay/' + id).then(function(data) {
			var body = modal.querySelector('.sa-modal-body');

			if (typeof rrweb === 'undefined' || typeof rrwebPlayer === 'undefined') {
				body.innerHTML = '<p>rrweb library not loaded. Please include it in your theme.</p>';
				return;
			}

			if (!data.events || data.events.length === 0) {
				body.innerHTML = '<p>No replay data available.</p>';
				return;
			}

			body.innerHTML = '<div id="sa-replay-container"></div>';

			new rrwebPlayer({
				target: document.getElementById('sa-replay-container'),
				props: {
					events: data.events,
					autoPlay: true,
					speed: 1,
					showController: true
				}
			});
		});
	}

	function closeReplayModal() {
		var modal = document.getElementById('sa-replay-modal');
		if (modal) modal.classList.remove('active');
	}

	function initTabs() {
		var tabs = document.querySelectorAll('.sa-tab-btn');
		var panels = document.querySelectorAll('.sa-tab-panel');

		tabs.forEach(function(tab) {
			tab.addEventListener('click', function() {
				tabs.forEach(function(t) { t.classList.remove('active'); });
				panels.forEach(function(p) { p.classList.remove('active'); });

				tab.classList.add('active');
				var target = document.getElementById('tab-' + tab.dataset.tab);
				if (target) target.classList.add('active');

				if (tab.dataset.tab === 'heatmaps') loadHeatmapTab();
				if (tab.dataset.tab === 'replays') loadReplaysTab();
			});
		});
	}

	function loadAllData() {
		loadOverview();
		loadLiveVisitors();
		loadTopPages();
		loadUTMStats();
		loadConversions();
		loadClickStats();
	}

	function escapeHtml(str) {
		if (!str) return '';
		var div = document.createElement('div');
		div.appendChild(document.createTextNode(str));
		return div.innerHTML;
	}

	function truncate(str, len) {
		if (!str) return '';
		return str.length > len ? str.substring(0, len) + '...' : str;
	}

	function truncateUrl(url) {
		if (!url) return '/';
		try {
			var u = new URL(url, window.location.origin);
			var path = u.pathname;
			if (path.length > 40) path = path.substring(0, 40) + '...';
			return path;
		} catch (e) {
			return url.length > 40 ? url.substring(0, 40) + '...' : url;
		}
	}

	function formatDuration(seconds) {
		if (!seconds || seconds < 1) return '< 1s';
		if (seconds < 60) return seconds + 's';
		var m = Math.floor(seconds / 60);
		var s = seconds % 60;
		return m + 'm ' + s + 's';
	}

	function getTimeAgo(dateStr) {
		var diff = Math.floor((Date.now() - new Date(dateStr).getTime()) / 1000);
		if (diff < 60) return diff + 's ago';
		if (diff < 3600) return Math.floor(diff / 60) + 'm ago';
		return Math.floor(diff / 3600) + 'h ago';
	}

	function getFlagEmoji(country) {
		if (!country || country.length !== 2) return '';
		var codePoints = country.toUpperCase().split('').map(function(c) {
			return 127397 + c.charCodeAt(0);
		});
		return String.fromCodePoint.apply(null, codePoints);
	}

	function init() {
		initPeriodSelector();
		initTabs();
		loadAllData();

		setInterval(loadLiveVisitors, 15000);

		var modal = document.getElementById('sa-replay-modal');
		if (modal) {
			modal.querySelector('.sa-modal-close').addEventListener('click', closeReplayModal);
			modal.addEventListener('click', function(e) {
				if (e.target === modal) closeReplayModal();
			});
		}
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}
})();
