/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**",
    "./assets/js/*",
  ],

  theme: {
    extend: {

      colors: {
        primary: {
          'yellow': 'hsl(53, 100, 70)',
          'blue': 'hsl(176, 67, 40)',
          'grey': 'hsl(0, 0, 20)',
          'pink': 'hsl(332, 100, 64)',
        },
        neutral: {
          'white': 'hsl(0, 0, 99)',
          'white-off': 'hsl(0, 52, 95)',
          'black': 'hsl(0, 0, 7)',
          'grey-off': 'hsl(264, 24, 96)',
        },
        shadow: {
          'filter': 'rgba(0, 0, 0, 0.25)',
        },
        border: {
          'grey': 'rgba(52, 52, 52, 0.15)',
          'pink': 'rgb(255, 73, 158)',
          'blue': 'rgb(34, 170, 161)',
          'yellow': 'rgb(255, 237, 101)',
        },
        hover: {
          'grey': 'rgba(52, 52, 52, 0.75)',
          'pink': 'rgb(181, 53, 112)',
          'blue': 'rgb(25, 125, 118)',
          'yellow': 'rgb(207, 192, 83)',
        },

      },

      fontSize: {
        'title': '30px',
        'paragraph': '15px',
        'input': '12px',
      },

      fontFamily: {
        'title': ['Inter'],
        'body': ['Roboto'],
      },
    },

    plugins: [],
  },
}
