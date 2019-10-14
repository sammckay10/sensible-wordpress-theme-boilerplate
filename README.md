# A Sensible WordPress Theme Boilerplate

An opinionated WordPress theme boilerplate using best practices. Designed to get things done quickly ✅

### Features:

- [Cache-busting file hashing for JS & CSS](https://www.gatsbycentral.com/what-is-cache-busting-or-content-hashing)
- [ES6 JavaScript using Babel](https://babeljs.io/)
- [Browsersync dev server](https://www.browsersync.io/)
- [Webpack](https://webpack.js.org)
- [Sass](https://sass-lang.com/)
- [Normalize.css CSS reset](https://necolas.github.io/normalize.css/)
- [CSS vendor auto-prefixing using PostCSS](https://github.com/postcss/autoprefixer)
- [Automatically include header.php and footer.php](https://github.com/sammckay10/sensible-wordpress-theme-boilerplate/blob/master/functions.php#L19)

### Installation:

Clone the repository into your theme directory (usually /wp-content/themes/) with a name of your choice

    git clone https://gitlab.com/sammckay10/sensible-wordpress-theme-boilerplate desired-name-for-your-new-theme

Install dependencies with Yarn or NPM (in new theme folder)

    yarn || npm install

Copy .env.example to .env and change DEV_URL to the correct address for your development site

    DEV_URL=http://example.com

Run the appropriate script (in new theme folder)

    yarn start // for development server
    yarn build // for production build
