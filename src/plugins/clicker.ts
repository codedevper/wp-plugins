interface MetricType {
    id: string,
    name: 'link' | 'button',
    pointerId: number,
    pointerType: string,
    isTrusted: boolean,
    clientX: number,
    clientY: number,
    cancelable: boolean,
    timeStamp: number,
    entries: EventTarget | null
}

function logDelta(metric: MetricType) {
    console.log(`${metric.name} matching ID ${metric.id} changed by ${metric.pointerType}`);
}

const queue = new Set();

function addToQueue(metric: MetricType) {
    console.log('queue add click');

    queue.add(metric);
}

function flushQueue() {
    if (queue.size > 0) {
        // Replace with whatever serialization method you prefer.
        // Note: JSON.stringify will likely include more data than you need.
        const body = JSON.stringify([...queue]);

        // Use `navigator.sendBeacon()` to send the data, which supports
        // sending while the page is unloading.
        //navigator.sendBeacon('/analytics', body);
        const nonce = window.localStorage.getItem('nonce') ?? ''
        fetch('/index.php?rest_route=/hello/v1/analytics', {
            method: 'POST',
            credentials: 'include',
            headers: {
                'X-WP-Nonce': nonce
            },
            body
        })

        console.log('send click', body);

        queue.clear();
    }
}

// Report all available metrics whenever the page is backgrounded or unloaded.
addEventListener('visibilitychange', () => {
    if (document.visibilityState === 'hidden') {
        flushQueue();
        console.log('flushQueue');
    }
});

onCLICK((metric: MetricType) => {
    logDelta(metric)
    addToQueue(metric)
})

function onCLICK(callback: (metric: MetricType) => void) {
    const link = document.querySelectorAll<HTMLAnchorElement>('a')
    const button = document.querySelectorAll<HTMLButtonElement>('button')

    if (link) {
        link.forEach(async (el) => {
            const signer = await shortHash(el.baseURI);
            const clicker = await shortHash(el.innerText);
            
            el.addEventListener('click', (event) => {
                const matching_id = `v8-${signer}-${clicker}`;
                const click: MetricType = {
                    id: matching_id,
                    name: 'link',
                    pointerId: event.pointerId,
                    pointerType: event.pointerType,
                    isTrusted: event.isTrusted,
                    clientX: event.clientX,
                    clientY: event.clientY,
                    cancelable: event.cancelable,
                    timeStamp: event.timeStamp,
                    entries: el
                }
                callback(click);
            })
        })
    }

    if (button) {
        button.forEach(async (el) => {
            const signer = await shortHash(el.baseURI);
            const clicker = await shortHash(el.innerText);

            el.addEventListener('click', (event) => {
                const matching_id = `v8-${signer}-${clicker}`;
                const click: MetricType = {
                    id: matching_id,
                    name: 'button',
                    pointerId: event.pointerId,
                    pointerType: event.pointerType,
                    isTrusted: event.isTrusted,
                    clientX: event.clientX,
                    clientY: event.clientY,
                    cancelable: event.cancelable,
                    timeStamp: event.timeStamp,
                    entries: event.srcElement
                }
                callback(click);
            })
        })
    }
}

async function shortHash(text: string) {
    const data = new TextEncoder().encode(text);
    const hash = await crypto.subtle.digest('SHA-256', data);

    return [...new Uint8Array(hash)]
        .map(b => b.toString(16).padStart(2, '0'))
        .join('')
        .slice(0, 12);
}
