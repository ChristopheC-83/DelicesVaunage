/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
    "./node_modules/flowbite/**/*.js", 
  ],
  theme: {
    extend: {
      colors: {
        "col-dark": "#505050",
        "col-light": "#f1f1f1",
        "col-gold": "#ffc107",
      },
      fontFamily: {
        handscript: ["Dancing Script"],
      },
      screens: {
        xs: "480px",
      },
    },
  },
  plugins: [
    require("flowbite/plugin"), 
  ],
};
