/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/**/*.{php,html,js}", 
    "./public/**/*.{php,html,js}",
    ],
  theme: {
    extend: {},
  },
  plugins: [
     require('flowbite/plugin')
  ],
}

