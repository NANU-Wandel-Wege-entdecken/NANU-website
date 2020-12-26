module.exports = {
  purge: [
    './src/**/*.php',
    './src/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      beige: {
        DEFAULT: '#F8F2E9',
      },
      pink: {
        light: '#DCAAC9',
        DEFAULT: '#CF89B4',
      },
      red: {
        DEFAULT: '#CB5853',
      },
      grey: {
        light: '#F7F7F7',
        footer: '#A79589',
        DEFAULT: '#999999',
        dark: '#333333',
      },
      white: '#FFFFFF',
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
