document.addEventListener('DOMContentLoaded', function() {
    // Your script code here
    // Check if the user prefers dark mode
    var rootElement = document.documentElement;
    const currentTheme = rootElement.getAttribute('data-theme');


    // Get the background image element
    const themeImage = document.querySelector('.bg-image');

    // Update the background image based on the theme preference
    if (currentTheme==='dark') {
        themeImage.src = 'multimedia/image/hypercube_bg-min.webp'; // Dark mode image path
        console.log('dark image')
    } else {
        themeImage.src = 'multimedia/image/tech_cube_light_bg.webp'; // Light mode image path
        console.log('light image')
    }
});