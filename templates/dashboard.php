<?php
/**
 * Simple Analytics Dashboard Template.
 *
 * @package SimpleAnalytics
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="wrap sa-dashboard">
	<h1 class="sa-title">Simple Analytics</h1>

	<div class="sa-period-selector">
		<button class="sa-period-btn" data-period="1h">1H</button>
		<button class="sa-period-btn active" data-period="24h">24H</button>
		<button class="sa-period-btn" data-period="7d">7D</button>
		<button class="sa-period-btn" data-period="30d">30D</button>
		<button class="sa-period-btn" data-period="90d">90D</button>
	</div>

	<div class="sa-stats-grid">
		<div class="sa-stat-card">
			<div class="sa-stat-label">Visitors</div>
			<div class="sa-stat-value" id="sa-visitors">0</div>
			<div class="sa-stat-change" id="sa-visitors-change"></div>
		</div>
		<div class="sa-stat-card">
			<div class="sa-stat-label">Pageviews</div>
			<div class="sa-stat-value" id="sa-pageviews">0</div>
			<div class="sa-stat-change" id="sa-pageviews-change"></div>
		</div>
		<div class="sa-stat-card">
			<div class="sa-stat-label">Bounce Rate</div>
			<div class="sa-stat-value" id="sa-bounce-rate">0%</div>
			<div class="sa-stat-change"></div>
		</div>
		<div class="sa-stat-card">
			<div class="sa-stat-label">Avg Duration</div>
			<div class="sa-stat-value" id="sa-avg-duration">0:00</div>
			<div class="sa-stat-change"></div>
		</div>
	</div>

	<div class="sa-live-bar">
		<span class="sa-live-dot"></span>
		<span>Live Visitors: <strong id="sa-live-count">0</strong> online now</span>
	</div>

	<div class="sa-tabs">
		<button class="sa-tab-btn active" data-tab="overview">Overview</button>
		<button class="sa-tab-btn" data-tab="clicks">Live Clicks</button>
		<button class="sa-tab-btn" data-tab="heatmaps">Heatmaps</button>
		<button class="sa-tab-btn" data-tab="replays">Recordings</button>
		<button class="sa-tab-btn" data-tab="utm">UTM</button>
		<button class="sa-tab-btn" data-tab="conversions">Conversions</button>
	</div>

	<div id="tab-overview" class="sa-tab-panel active">
		<div class="sa-grid-2">
			<div class="sa-card">
				<h3>Visitors Over Time</h3>
				<div class="sa-chart-container">
					<canvas id="sa-visitors-chart"></canvas>
				</div>
			</div>
			<div class="sa-card">
				<h3>Top Pages</h3>
				<div id="sa-top-pages" class="sa-list-container"></div>
			</div>
		</div>

		<div class="sa-grid-2">
			<div class="sa-card">
				<h3>Live Visitors</h3>
				<div id="sa-live-list" class="sa-list-container"></div>
			</div>
			<div class="sa-card">
				<h3>Top Clicks</h3>
				<div class="sa-stat-inline">
					<span>Total Clicks:</span>
					<strong id="sa-total-clicks">0</strong>
				</div>
				<div id="sa-top-clicks" class="sa-list-container"></div>
			</div>
		</div>
	</div>

	<div id="tab-clicks" class="sa-tab-panel">
		<div class="sa-card">
			<h3>Click Analytics</h3>
			<div class="sa-stat-inline">
				<span>Total Clicks (24h):</span>
				<strong id="sa-total-clicks-tab">0</strong>
			</div>
			<div id="sa-top-clicks-tab" class="sa-list-container"></div>
		</div>
	</div>

	<div id="tab-heatmaps" class="sa-tab-panel">
		<div class="sa-heatmap-controls">
			<select id="sa-heatmap-page" class="sa-select">
				<option value="">All Pages</option>
			</select>
			<select id="sa-heatmap-device" class="sa-select">
				<option value="all">All Devices</option>
				<option value="desktop">Desktop</option>
				<option value="tablet">Tablet</option>
				<option value="mobile">Mobile</option>
			</select>
		</div>
		<div class="sa-card">
			<h3>Click Heatmap</h3>
			<div class="sa-heatmap-wrapper">
				<canvas id="sa-heatmap-canvas"></canvas>
			</div>
		</div>
	</div>

	<div id="tab-replays" class="sa-tab-panel">
		<div class="sa-card">
			<h3>Session Recordings</h3>
			<div id="sa-replays-list" class="sa-list-container"></div>
		</div>
	</div>

	<div id="tab-utm" class="sa-tab-panel">
		<div class="sa-card">
			<h3>UTM Sources</h3>
			<div class="sa-chart-container">
				<canvas id="sa-utm-chart"></canvas>
			</div>
		</div>
	</div>

	<div id="tab-conversions" class="sa-tab-panel">
		<div class="sa-stats-grid sa-stats-small">
			<div class="sa-stat-card">
				<div class="sa-stat-label">Conversions</div>
				<div class="sa-stat-value" id="sa-total-conversions">0</div>
			</div>
			<div class="sa-stat-card">
				<div class="sa-stat-label">Revenue</div>
				<div class="sa-stat-value" id="sa-total-revenue">$0.00</div>
			</div>
		</div>
		<div class="sa-card">
			<h3>Conversion Goals</h3>
			<div class="sa-chart-container sa-chart-small">
				<canvas id="sa-conversion-chart"></canvas>
			</div>
		</div>
	</div>
</div>

<div id="sa-replay-modal" class="sa-modal">
	<div class="sa-modal-content">
		<div class="sa-modal-header">
			<h3>Session Replay</h3>
			<button class="sa-modal-close">&times;</button>
		</div>
		<div class="sa-modal-body"></div>
	</div>
</div>
