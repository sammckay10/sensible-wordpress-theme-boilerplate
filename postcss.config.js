const purgecss = require("@fullhuman/postcss-purgecss")({
  content: ["*.php", "**/*.php", "js/*.js", "js/**/*.js"],
  whitelist: ["ul"],
  defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
});

module.exports = {
  plugins: [
    require("postcss-import"),
    require("tailwindcss"),
    require("postcss-nested"),
    require("autoprefixer"),
    require("cssnano")({ preset: "default" }),
    ...(process.env.NODE_ENV === "production" ? [purgecss] : [])
  ]
};
