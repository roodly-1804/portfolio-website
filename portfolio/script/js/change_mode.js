var modeIcon = document.getElementById('mode');
const iconElement = modeIcon.querySelector('i');
var rootElement = document.documentElement;
function getCookie(name) {
    var value = '; ' + document.cookie;
    var parts = value.split('; ' + name + '=');
    if (parts.length === 2) {
        return parts.pop().split(';').shift();
    }
}

function setCookie(name, value, days) {
    var expires = new Date();
    expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
    document.cookie = name + '=' + value + ';expires=' + expires.toUTCString() + ';path=/';
}

// Retrieve the saved theme preference from the cookie
var savedPreference = getCookie('themePreference');
if (savedPreference === 'dark' && typeof(savedPreference) != undefined) {
    // Apply dark theme
    rootElement.setAttribute('data-theme', 'dark');
    iconElement.classList.remove('fa-moon');
    iconElement.classList.add('fa-sun');
}else if (savedPreference === 'light' && typeof(savedPreference) != undefined){
    rootElement.removeAttribute('data-theme');
    iconElement.classList.remove('fa-sun');
    iconElement.classList.add('fa-moon');
} else {
    // Apply light theme
    const userPreference = window.matchMedia('(prefers-color-scheme: dark)').matches;

    if (userPreference) {
        rootElement.setAttribute('data-theme', 'dark');
        iconElement.classList.remove('fa-moon');
        iconElement.classList.add('fa-sun');
    } else {
        rootElement.removeAttribute('data-theme');
        iconElement.classList.remove('fa-sun');
        iconElement.classList.add('fa-moon');
    }
}

modeIcon.onclick = function() {
    console.log("Button clicked!"); // Check if the click event is detected
    var currentTheme = rootElement.getAttribute('data-theme');
    console.log("Current theme:", currentTheme); // Check the current theme

    if (currentTheme === 'dark') {
        rootElement.removeAttribute('data-theme');
        iconElement.classList.remove('fa-sun');
        iconElement.classList.add('fa-moon');
        setCookie('themePreference', 'light', 30);
    } else {
        rootElement.setAttribute('data-theme', 'dark');
        iconElement.classList.remove('fa-moon');
        iconElement.classList.add('fa-sun');
        setCookie('themePreference', 'dark', 30);
    }
    location.reload();

    console.log("Theme preference updated."); // Check if the theme preference is updated
};
