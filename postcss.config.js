const purgecss = require("@fullhuman/postcss-purgecss")({
  content: ["*.php", "**/*.php", "js/*.js", "js/**/*.js"],
  defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
});

module.exports = {
  plugins: [
    require("tailwindcss"),
    require("postcss-import"),
    require("autoprefixer"),
    require("cssnano")({ preset: "default" }),
    ...(process.env.NODE_ENV === "production" ? [purgecss] : [])
  ]
};
