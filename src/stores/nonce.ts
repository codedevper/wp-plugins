import Alpine from 'alpinejs'

document.addEventListener('alpine:init', () => {
    console.log('nonce:store');

    let on = false
    let nonce = 'false'
    let user = null

    Alpine.store('nonce', {
        on: false,
        nonce: 'false',
        user: null,
        init(this: { on: boolean, nonce: string }) {
            console.log('nonce:init');

            const csrfToken = document.querySelector('meta[name="csrf-token"]')

            if (csrfToken) {
                nonce = csrfToken.getAttribute('content') ?? 'false'
                console.log('nonce:', nonce)
                window.localStorage.setItem('nonce', nonce)
                on = true
            }
        },
        connect() {
            console.log('nonce:connect');
            setTimeout(async () => {
                const res = await fetch('/index.php?rest_route=/wp/v2/users/me', {
                    credentials: 'include',
                    headers: {
                        'X-WP-Nonce': nonce
                    }
                })

                if (res.json) {
                    const json = await res.json()
                    console.log('connectJson', json);
                    user = json
                    on = true
                }
            }, 1000);
        }
    })
})
