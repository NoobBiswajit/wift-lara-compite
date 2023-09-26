/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      rlw: "Raleway",
    },
    extend: {
      colors: {
        dred: "#F00",
        Nblue: "#02075d",
        rpigment: "#ED1520",
        bubbles: "#E8F9FF",
        apink: "#FA949D",
        azure: "#0080FF",
      },
      boxShadow: {
        smallS: "rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;",
        sins: "rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;",
      },
    },
  },
  plugins: [],
};
