/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      'raleway': ['Raleway', 'sans-serif'],
      backdropBlur: {
        xs: '2px',
      },
    },
  },
  plugins: [],
}