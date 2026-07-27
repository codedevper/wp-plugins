import { onCLS, onINP, onLCP, onFCP, onTTFB } from 'web-vitals';
import type { MetricType } from 'web-vitals';

function logDelta(metric: MetricType) {
    console.log(`${metric.name} matching ID ${metric.id} changed by ${metric.delta}`);
}

const queue = new Set();

function addToQueue(metric: MetricType) {
    console.log('add metric');
    queue.add(metric);
    window.localStorage.setItem('matching_id', metric.id)
}

function flushQueue() {
    if (queue.size > 0) {
        // Replace with whatever serialization method you prefer.
        // Note: JSON.stringify will likely include more data than you need.
        const body = JSON.stringify([...queue]);

        // Use `navigator.sendBeacon()` to send the data, which supports
        // sending while the page is unloading.
        //navigator.sendBeacon('/index.php?rest_route=/hello/v1/analytics', body);
        const nonce = window.localStorage.getItem('nonce') ?? ''
        fetch('/index.php?rest_route=/analytics/v1/visitors', {
            method: 'POST',
            credentials: 'include',
            headers: {
                'X-WP-Nonce': nonce
            },
            body
        })

        console.log('send metrics', body);

        queue.clear();
        window.localStorage.removeItemItem('matching_id')
    }
}

// Report all available metrics whenever the page is backgrounded or unloaded.
addEventListener('visibilitychange', () => {
    if (document.visibilityState === 'hidden') {
        flushQueue();
        console.log('flushQueue');
    }
});

function sendToAnalytics(metric: MetricType) {
    const body = JSON.stringify({
        name: metric.name,
        value: metric.value,
        id: metric.id,

        // Override the page location for soft nav support
        page_location: window.location.href,

        // Include additional data as needed...
    });

    // Use `navigator.sendBeacon()` to send the data, which supports
    // sending while the page is unloading.
    navigator.sendBeacon('/analytics', body);
}

onCLS((metric) => {
    logDelta(metric)
    addToQueue(metric)
});
onINP((metric) => {
    logDelta(metric)
    addToQueue(metric)
});
onLCP((metric) => {
    logDelta(metric)
    addToQueue(metric)
});
onFCP((metric) => {
    logDelta(metric)
    addToQueue(metric)
});
onTTFB((metric) => {
    logDelta(metric)
    addToQueue(metric)
});
