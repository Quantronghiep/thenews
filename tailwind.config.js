/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        fontFamily: {
            bitter: ['Bitter', 'serif'],
        },
        color: {
            yellow: '#fbff22',
            blue: '#0876ff',
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
    ],
}
