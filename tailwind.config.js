/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/views/Lenguaje1_1.blade.php"
  ],
  theme: {
    extend: {
      colors: {
        uno: '#A3E1EF',
        dos: '#9FC9D3',
        tres: '#E6DCF8',
        cuatro: '#ECA1AB',
        cinco: '#95CFE4',
        seis: '#57C1E6',
        siete: '#908CD6',
        ocho: '#ECFAFD',
        nueve: 'FFFFFF',
      },
      fontFamily: {
        logo1: ['Lilita One', 'sans-serif'],  
        logo2: ['Barlow', 'sans-serif'],  
        boton: ['Open Sans', 'sans-serif'],   
        texto: ['Poppins', 'sans-serif'],     
      },
    },
  },
  plugins: [],
};