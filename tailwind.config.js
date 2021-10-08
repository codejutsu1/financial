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

        'hero-pattern': "url('/images/about.jpg')",

        // 'footer-texture': "url('/img/footer-texture.png')",
       }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
