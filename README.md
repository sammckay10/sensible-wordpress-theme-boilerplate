# A Sensible WordPress Theme Boilerplate

An opinionated WordPress theme boilerplate using best practices. Designed to get things done quickly ✅

### Features:

- [Cache-busting content hashing for JS & CSS](https://webpack.js.org/guides/caching/)
- [Script Deferring](https://www.w3schools.com/tags/att_script_defer.asp)
- [ES6 JavaScript using Babel](https://babeljs.io/)
- [Browsersync dev server](https://www.browsersync.io/)
- [Webpack](https://webpack.js.org)
- [Tailwind CSS](https://tailwindcss.com/)
- [CSS Autoprefixer](https://github.com/postcss/autoprefixer)
- [PurgeCSS](https://www.purgecss.com/)
- [PostCSS Nesting](https://github.com/postcss/postcss-nested)
- [Automatic inclusion of header.php & footer.php in each template](https://github.com/sammckay10/sensible-wordpress-theme-boilerplate/blob/master/functions.php#L19)
- [Image, background-image & iframe lazy-loading with bLazy](http://dinbror.dk/blog/blazy/)

### Installation:

Clone the repository into your theme directory (usually /wp-content/themes/) with a name of your choice

    git clone https://github.com/sammckay10/sensible-wordpress-theme-boilerplate desired-name-for-your-new-theme

Install dependencies with Yarn or NPM (in new theme folder)

    yarn || npm install

Copy .env.example to .env & change DEV_URL to the correct address for your development site

    DEV_URL=http://example.com

Run the appropriate script (in new theme folder)

    yarn start // for development server
    yarn build // for production build
