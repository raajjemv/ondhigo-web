const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                '72': '18rem',
                '84': '22rem',
                '96': '26rem',
                '98': '30rem',
                '99': '45rem',
            },
            colors: {
                'semi-75': 'rgba(0, 0, 0, 0.75)',
                'semi-60': 'rgba(0, 0, 0, 0.6)'
            },

        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};
