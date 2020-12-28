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
        dark: "#97211C",
      },
      grey: {
        light: '#F7F7F7',
        footer: '#A79589',
        DEFAULT: '#999999',
        dark: '#333333',
      },
      white: '#FFFFFF',
    },
    fontFamily: {
      'nunitoreg': ['nunito_sans_regular', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      'nunitoital': ['nunito_sans_italic', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      'nunitobold': ['nunito_sans_bold', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      'nunitoxbold': ['nunito_sans_extrabold', 'ui-sans-serif', 'system-ui', 'sans-serif'],
     },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
