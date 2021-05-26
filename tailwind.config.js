module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontSize: {
                '10xl': '8rem',
            },
            fontFamily: {
                'montserrat': ['Montserrat'],
                'abhaya-libre': ['Abhaya Libre'],
                'alegraya-sans': ['Alegreya Sans'],
                'caveat': ['Caveat']
            },
            letterSpacing: {
                widest: '.25em',
            },
            backgroundImage: theme => ({
                'covid': "url('/images/covid-background.jpg')",
            })
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
