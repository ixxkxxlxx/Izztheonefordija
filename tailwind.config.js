import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

theme: {
        extend: {
            colors: {
                'soft-pink': {
                    50: '#fdf2f8',
                    100: '#fce7f3',
                    200: '#fbcfe8',
                    300: '#f9a8d4',
                    400: '#f472b6',
                    500: '#ec4899',
                    600: '#db2777',
                    700: '#be185d',
                    800: '#9d174d',
                    900: '#831843',
                    950: '#500724',
                },
                'mocha': {
                    500: '#8b7566',
                    600: '#756053',
                    700: '#604c40',
                    800: '#4d3a30',
                },
                'primary': '#ef3976',
                'elegant-brown': '#7c6a6a',
                'background-light': '#fefafb',
                'background-dark': '#221016',
            },
            fontFamily: {
                serif: ['Playfair Display', 'serif'],
                cursive: ['Great Vibes', 'cursive'],
                sans: ['Poppins', 'Figtree', ...defaultTheme.fontFamily.sans],
                display: ['Newsreader', 'serif'],
            },
            animation: {
                'fade-in': 'fadeIn 0.5s ease-in-out',
            },
            backdropBlur: {
                xs: '2px',
            },
        },
    },

    plugins: [forms],
};
