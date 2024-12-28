# Tailwind Theme Starter

This is a custom theme based on **bootScore**, but adapted to use **TailwindCSS** and **Vite** as the foundation for front-end development.

## Key Features

- **TailwindCSS**: Replaces Bootstrap as the primary CSS framework for a modern and highly customizable design.
- **Vite**: Used for a fast and efficient development experience with support for HMR (Hot Module Replacement).
- **WordPress Integration**: Retains essential WordPress functionalities, such as WooCommerce support and child themes.

## Table of Contents

- [Installation](#installation)
- [Using Vite](#using-vite)
- [Customization](#customization)
- [License and Credits](#license-and-credits)

## Installation

1. Clone this repository or download the theme archive.
2. Upload the theme folder to `wp-content/themes/` in your WordPress installation.
3. Activate the theme from the WordPress admin panel under **Appearance > Themes**.
4. Install dependencies by running:

   ```bash
   npm install
   ```

5. Start the development environment with Vite:
   ```bash
   npm run dev
   ```
6. Build the files for production:
   ```bash
   npm run build
   ```

## Using Vite

The `vite.config.js` file is configured to process the theme’s styles and scripts. Key points to note:

- Main style files are located in `src/styles/`.
- Main script files are located in `src/scripts/`.
- Vite is configured to handle assets such as fonts and images in the `src/assets/` folder.

## Customization

- **Styles**: Edit files in `src/styles/` and use Tailwind utilities to design components.
- **Scripts**: Add custom scripts in `src/scripts/`.
- **WooCommerce**: This theme includes basic WooCommerce support. You can customize templates in the `woocommerce` folder.

## License and Credits

This project is distributed under the [MIT License](./LICENSE). It includes the following tools and resources:

- [TailwindCSS](https://tailwindcss.com/) - CSS Framework
- [Vite](https://vitejs.dev/) - Development Tool
- [WordPress](https://wordpress.org/) - CMS
- [bootScore](https://bootscore.me/) - Original base theme
