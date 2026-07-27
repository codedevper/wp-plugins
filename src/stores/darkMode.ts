import Alpine from 'alpinejs'

document.addEventListener('alpine:init', () => {
    console.log('page:store');

    Alpine.store('darkMode', {
        on: false,
        init(this: { on: boolean }) {
            console.log('darkMode:init');
            this.on = window.matchMedia('(prefers-color-scheme: dark)').matches
        },
        toggle(this: { on: boolean }) {
            this.on = !this.on
        }
    })
})