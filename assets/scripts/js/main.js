"use strict";
// Toggle between light and dark themes when the theme toggle button is clicked
document.documentElement.setAttribute('data-theme', 'dark');
var themeToggle = document.querySelector('.theme-toggle');
themeToggle === null || themeToggle === void 0 ? void 0 : themeToggle.addEventListener('click', toggleTheme);
function toggleTheme() {
    var html = document.querySelector('html');
    var currentTheme = html === null || html === void 0 ? void 0 : html.getAttribute('data-theme');
    if (currentTheme === 'light') {
        setTheme('dark');
    }
    else {
        setTheme('light');
    }
}
function setTheme(theme) {
    var html = document.querySelector('html');
    html === null || html === void 0 ? void 0 : html.setAttribute('data-theme', theme);
}
