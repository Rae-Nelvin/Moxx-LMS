const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
        content: [
            './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
            './storage/framework/views/*.php',
            './resources/views/**/*.blade.php',
        ],
        theme: {
            screens: {
                //phone
                'phone': '500px',

                'tablet': '640px',
                // => @media (min-width: 640px) { ... }

                'laptop': '1024px',
                // => @media (min-width: 1024px) { ... }

                'desktop': '1280px',
                // => @media (min-width: 1280px) { ... }
            },

            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                    },
                },
            },
        };