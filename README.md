# A Sensible WordPress Theme Boilerplate

[![code style: prettier](https://img.shields.io/badge/code_style-prettier-ff69b4.svg?style=flat-square)](https://github.com/prettier/prettier)

An opinionated WordPress theme boilerplate using best practices. Designed to get things done quickly ✅

### Features:

- [Cache-busting content hashing for JS & CSS](https://www.gatsbycentral.com/what-is-cache-busting-or-content-hashing)
- [ES6 JavaScript using Babel](https://babeljs.io/)
- [Browsersync dev server](https://www.browsersync.io/)
- [Webpack](https://webpack.js.org)
- [Sass](https://sass-lang.com/)
- [Normalize.css CSS reset](https://necolas.github.io/normalize.css/)
- [CSS vendor auto-prefixing using PostCSS](https://github.com/postcss/autoprefixer)
- [Automatically includes header.php & footer.php in each template](https://github.com/sammckay10/sensible-wordpress-theme-boilerplate/blob/master/functions.php#L19)
- [Image, background-image & iframe lazy-loading with bLazy](http://dinbror.dk/blog/blazy/)

### Installation:

Clone the repository into your theme directory (usually /wp-content/themes/) with a name of your choice

    git clone https://gitlab.com/sammckay10/sensible-wordpress-theme-boilerplate desired-name-for-your-new-theme

Install dependencies with Yarn or NPM (in new theme folder)

    yarn || npm install

Copy .env.example to .env & change DEV_URL to the correct address for your development site

    DEV_URL=http://example.com

Run the appropriate script (in new theme folder)

    yarn start // for development server
    yarn build // for production build
