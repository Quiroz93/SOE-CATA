module.exports = {
  content: [
    './index.html',
    './src/**/*.{vue,js,ts,jsx,tsx}',
  ],
  theme: {
    extend: {
      colors: {
        sena: {
          green: '#074122',
          dark: '#006b31',
          gray: '#f4f6f8',
        },
      },
      fontFamily: {
        sena: ['"Montserrat"', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
};