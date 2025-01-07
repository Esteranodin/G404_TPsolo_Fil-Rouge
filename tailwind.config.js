/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "./public/*"
  ],

  theme: {
    extend: {

      colors: {
        primary: {
          'yellow': 'hsl(53, 100, 70)',
          'blue': 'hsl(176, 67, 40)',
          'grey': 'hsl(0, 0, 20)',
          'pink' : 'hsl(332, 100, 64)',
        },
        neutral: {
          'white': 'hsl(0, 52, 95)',
          'black': 'hsl(0, 0, 7)',
          'grey' : 'hsl(264, 24, 96)',
        },
      },

      fontSize: {
        title: '30px',
        paragraph: '15px',
      },

      fontFamily: {
        'title': ['Inter'],
        'body': ['Roboto'],
      },
    },

  },
  
  plugins: [],
}

