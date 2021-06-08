const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                // custom: ['Futura Bold', 'Futura Book', 'Futura Light', 'sans-serif'],
                titles: ['FuturaBold'],
                subtitles: ['FuturaBook'],
                light: ['FuturaLight'],
                rale: ['Raleway'],
                body: ['FuturaLight'],
                anton: ['Anton'],

            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};