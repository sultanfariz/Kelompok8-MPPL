const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
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
            },
            colors: {
                'fhosting-blue': {
                    50: '#98e2f3',
                    100: '#83dcf1',
                    200: '#6ed7ee',
                    300: '#5ad1ec',
                    400: '#45cbea',
                    500: '#31c6e8',
                    600: '#2cb2d0',
                    700: '#279eb9',
                    800: '#228aa2',
                    900: '#1d768b',
                    DEFAULT: '#31c6e8'
                },
                'fhosting-green': {
                    50: '#98f3cf',
                    100: '#83f1c5',
                    200: '#6eeebb',
                    300: '#5aecb2',
                    400: '#45eaa8',
                    500: '#31e89f',
                    600: '#2cd08f',
                    700: '#27b97f',
                    800: '#22a26f',
                    900: '#1d8b5f',
                    DEFAULT: '#31e89f'
                },
            },
            borderColor: {
                'fhosting-blue': '#31c6e8',
                'fhosting-green': '#31e89f'
            }
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            amber: colors.amber,
            black: '#000',
            blue: colors.blue,
            blueGray: colors.blueGray,
            coolGray: colors.coolGray,
            cyan: colors.cyan,
            emerald: colors.emerald,
            fuchsia: colors.fuchsia,
            gray: colors.gray,
            green: colors.green,
            indigo: colors.indigo,
            lightBlue: colors.lightBlue,
            lime: colors.lime,
            orange: colors.orange,
            pink: colors.pink,
            purple: colors.purple,
            red: colors.red,
            rose: colors.rose,
            teal: colors.teal,
            trueGray: colors.trueGray,
            violet: colors.violet,
            warmGray: colors.warmGray,
            white: '#FFF',
            yellow: colors.yellow,
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
