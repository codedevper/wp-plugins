import Alpine from 'alpinejs'

document.addEventListener('alpine:init', () => {
    console.log('visitors:store');

    Alpine.store('visitors', {
        on: false,
        init(this: { on: boolean }) {
            console.log('visitors:init');
            
            this.on = true
        },
        toggle(this: { on: boolean }) {
            this.on = !this.on
        }
    })
})
