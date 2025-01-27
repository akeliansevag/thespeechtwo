/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{css,js,php}", "./src/**/*.{js,css,php}", "./components/**/*.{php,css,js}"],
  theme: {
    container: {
      center: true,
      padding: '15px',
      screens: {
        sm: '600px',
        md: '750px',
        lg: '970px',
        xl: '1200px',
      },
    },
    extend: {
      colors: {
        primary : '#F90542'
      },
      fontFamily: {
        english: ['Work Sans', 'sans-serif'], // Replace with your English font
        arabic: ['Readex Pro', 'serif'],       // Replace with your Arabic font
      },
    },
  },
  plugins: [],
}

