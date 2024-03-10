/** @type {import('tailwindcss').Config} */
export default {
  content: [],
  theme: {
    extend: {},
    colors: {
      'cerise': '#d8315b',
      'blue': '#3e92cc',
      'ghost': '#fffaff',
      'black': '#1e1b18',
      'positive': '#007d3e',
      'negative': '#cc071e',
    }
  },
  plugins: [],
  purge: [

    './resources/**/*.blade.php',

    './resources/**/*.js',

    './resources/**/*.vue',

  ],
}

