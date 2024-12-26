module.exports = {
  content: [
    // https://tailwindcss.com/docs/content-configuration
    // "./*.php",
    "./**/*.php",
    // "./templates/**/*.php",
    "./safelist.txt",

    //'./**/*.php', // recursive search for *.php (be aware on every file change it will go even through /node_modules which can be slow, read doc)
    // "!./node_modules/**",
    "!./vendor/**",
    "!./dist/**",
    "./node_modules/flowbite/**/*.js",
  ],
  safelist: [
    "text-center",
    //{
    //  pattern: /text-(white|black)-(200|500|800)/
    //}
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          base: "var(--primary-600)",
          10: "var(--primary-10)",
          50: "var(--primary-50)",
          100: "var(--primary-100)",
          200: "var(--primary-200)",
          300: "var(--primary-300)",
          400: "var(--primary-400)",
          500: "var(--primary-500)",
          600: "var(--primary-600)",
          700: "var(--primary-700)",
          800: "var(--primary-800)",
          900: "var(--primary-900)",
          950: "var(--primary-950)",
        },
      },
    },
  },
  plugins: [require("flowbite/plugin")],
};
