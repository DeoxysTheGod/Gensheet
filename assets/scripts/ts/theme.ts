// Toggle between light and dark themes when the theme toggle button is clicked
document.documentElement.setAttribute('data-theme', 'dark');

const themeToggle = document.querySelector('.theme-toggle') as Element;
themeToggle?.addEventListener('click', toggleTheme);

function toggleTheme() {
    const html = document.querySelector('html') as HTMLHtmlElement;
    const currentTheme = html?.getAttribute('data-theme');

    if (currentTheme === 'light') {
        setTheme('dark');
    } else {
        setTheme('light');
    }
}

function setTheme(theme: string) {
    const html = document.querySelector('html') as HTMLHtmlElement;
    html?.setAttribute('data-theme', theme);
}
