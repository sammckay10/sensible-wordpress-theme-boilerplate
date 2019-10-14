# A Sensible WordPress Theme Boilerplate

An opinionated WordPress theme boilerplate using best practices. Designed to get things done quickly ✅

### Features:

- Cache busting file hashing for JS & CSS
- ES6 JavaScript using Babel - https://babeljs.io/
- Browsersync dev server - https://www.browsersync.io/
- Webpack - https://webpack.js.org
- Sass - https://sass-lang.com/
- Normalize.css CSS reset - https://necolas.github.io/normalize.css/
- CSS vendor auto-prefixing using PostCSS - https://postcss.org/

### Installation:

1.  Clone the repository into your theme directory (usually /wp-content/themes/)

        git clone https://gitlab.com/sammckay10/sensible-wordpress-theme-boilerplate desired-name-for-new-theme

2.  Install dependencies with NPM or Yarn (in theme folder)

        yarn || npm install

3.  Copy .env.example to .env and change DEV_URL to the correct address for your development site

        DEV_URL=http://example.com

4.  Run the build script (in theme folder)

        yarn start // development server/file watcher
        yarn build // production build
