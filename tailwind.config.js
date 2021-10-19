module.exports = {
  mode: 'jit',
  purge: [
    './resources/views/*.blade.php',
    './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern': "url('/images/about-min.jpg')",
       }
    },
  },
  variants: {},
  plugins: [],
}
