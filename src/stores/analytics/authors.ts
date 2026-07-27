import Alpine from 'alpinejs'

document.addEventListener('alpine:init', () => {
    Alpine.store('authors', {
        on: false,
        init(this: { on: boolean }) {
            this.on = window.matchMedia('(prefers-color-scheme: dark)').matches
        },
        toggle(this: { on: boolean }) {
            this.on = !this.on
        }
    })
})