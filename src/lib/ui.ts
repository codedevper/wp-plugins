import 'preline';

// Initialize Preline UI components
function initPrelineComponents() {
    const html = document.querySelector('html');
    // Use the recommended HSStaticMethods.autoInit() approach
    if (html && window.HSStaticMethods && typeof window.HSStaticMethods.autoInit === 'function') {
        window.HSStaticMethods.autoInit();

        const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
        const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);

        if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
        else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
        else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
        else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
    }
}

// Listen for Alpine events to re-initialize components
document.addEventListener('alpine:init', () => {
    // Re-initialize components after navigation
    initPrelineComponents();
});

document.addEventListener('DOMContentLoaded', () => {
    initPrelineComponents();
});

document.addEventListener('readystatechange', () => {
    initPrelineComponents();
});

// Initialize on page load
document.addEventListener('load', () => {
    initPrelineComponents();
});