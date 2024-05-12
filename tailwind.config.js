/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern': "url('https://img.freepik.com/free-photo/top-view-variety-tasty-cheese-with-milk_23-2148610555.jpg?w=1380&t=st=1714765630~exp=1714766230~hmac=fff785b59cd3d14bfcce5a08f5d6e028d3c00f36570ed50ce0e6e39be687ddfd')",
        'footer-texture': "url('/img/footer-texture.png')",
      }
    },
  },
  plugins: [],
}

