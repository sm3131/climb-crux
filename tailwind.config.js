/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      'grey': '#D2D8DA',
      'blue-grey': '#BBD3DC',
      'light-grey': '#D6D6D680',
      'dark-grey': '#5b5b5b',
      'white': '#FFFFFF',
      'green-blue': '#5e97cb',
      'deep-red': '#f51100',
      'dark-blue': '#0854EE',
      'sunset-one': '#FDD393',
      'sunset-two': '#ED7E49',
      'sunset-three': '#7C313D',
    },
    fontFamily: {
      roboto: ['Roboto Mono', 'monospace'],
      aleg: ['Alegreya', 'serif'],
      lora: ['Lora', 'serif'],
    },
  },
  plugins: [],
}

