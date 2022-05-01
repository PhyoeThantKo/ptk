module.exports = {
  plugins: [
    require('tailwind-scrollbar-hide')
  ],
  variants: {
      scrollbar: ['rounded']
  },
  content: [
    '*.php',
    'components/footer.php',
    'admin/**/*.php'
  ],
  theme: {
    extend: {
      varients : {
        extend : {
          backgroundColor : ['active']
        },
      },
      colors: {
        'earth': '#F9E8DA',
        'notsowhite': '#F4F1F2',
        'light_theme': '#DB1084',
      }
    },
  }
}