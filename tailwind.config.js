/** @type {import('tailwindcss').Config} */
export default {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],

}

module.exports = {

  content: [
      "./node_modules/flowbite/**/*.js"
  ]

}

