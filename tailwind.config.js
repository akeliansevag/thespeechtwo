/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{css,js,php}", "./src/**/*.{js,css,php}", "./components/**/*.{php,css,js}"],
  theme: {
    container: {
      center: true,
      padding: '15px',
    },
    extend: {
      colors: {
        primary : '#F42323'
      },
      fontFamily: {
        english: ['Inter', 'sans-serif'], // Replace with your English font
        arabic: ['Readex Pro', 'serif'],       // Replace with your Arabic font
      },
    },
  },
  plugins: [],
}

