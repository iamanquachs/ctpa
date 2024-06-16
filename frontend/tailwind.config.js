module.exports = {
  mode: "jit",
  content: [
    "./index.html",
    "./src/**/*.{js,jsx}",
    "./node_modules/tw-elements/dist/js/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        quicksand: ["Quicksand_Regular"],
        quicksand_semibold: ["Quicksand_SemiBold"],
        quicksand_bold: ["Quicksand_Bold"],
      },
    },
    screens: {
      mobile: { max: "767px" },
      // => @media ( max-width: 767px) { ... }

      tablet: { min: "768px", max: "1024px" },
      // => @media (min-width: 768px and max-width: 1023px) { ... }

      smlap: { min: "1025px", max: "1279px" },
      // => @media (min-width: 1024px and max-width: 1279px) { ... }

      lglap: { min: "1280px", max: "1535px" },
      // => @media (min-width: 1280px and max-width: 1535px) { ... }

      fullscreen: { min: "1536px" },
      // => @media (min-width: 1536px) { ... }
    },
  },
  plugins: [require("tw-elements/dist/plugin")],
};
