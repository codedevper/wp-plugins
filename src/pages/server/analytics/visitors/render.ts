import Alpine from 'alpinejs'
import "@/stores/auth";
import "@/stores/nonce";
import "@/stores/analytics/visitors";

window.Alpine = Alpine

document.addEventListener('alpine:init', () => {
    console.log('server:data');
    
    Alpine.data('server', () => ({
        open: false,
        init() {
            // This code will be executed before Alpine
            // initializes the rest of the component.
            console.log('server:init');
        },
        toggle() {
            this.open = !this.open
        }
    }))

    Alpine.data('timer', () => ({
        timer: 0,
        counter: 0,
        init() {
            // Register an event handler that references the component instance
            console.log('timer:init');
            this.timer = setInterval(() => {
                console.log('Increased counter to', ++this.counter);
            }, 1000);
        },
        destroy() {
            // Detach the handler, avoiding memory and side-effect leakage
            clearInterval(this.timer);
        },
    }))
})

Alpine.start()