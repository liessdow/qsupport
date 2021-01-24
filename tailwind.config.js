module.exports = {
    purge: [],
    purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
     darkMode: false, // or 'media' or 'class'
     theme: {
        fontFamily: {
            'sans': ['Lato', 'Roboto', 'BlickMacSystemFont', 'Helvectia Neue', 'Arial', 'sans-serif'],
        },
       extend: {},
     },
     variants: {
       extend: {},
     },
     plugins: [],
}
