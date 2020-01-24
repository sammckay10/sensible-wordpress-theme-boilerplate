// See https://webpack.js.org/ for documentation

require("dotenv").config();

const path = require("path");

const AssetsPlugin = require("assets-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

const { CleanWebpackPlugin } = require("clean-webpack-plugin");

module.exports = {
  mode: process.env.NODE_ENV === "production" ? "production" : "development",
  devtool: "source-map",
  entry: "./js/index.js",
  output: {
    filename: "app.[contenthash].js",
    path: path.resolve(__dirname, "dist")
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: { loader: "babel-loader" }
      },
      {
        test: /\.css$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "postcss-loader"]
      },
      {
        test: /\.(png|svg|jpe?g|gif)$/,
        use: ["file-loader", "image-webpack-loader"]
      }
    ]
  },
  plugins: [
    new CleanWebpackPlugin(),
    new AssetsPlugin({
      filename: "hashed-assets.json",
      path: path.resolve(__dirname, "dist")
    }),
    new MiniCssExtractPlugin({
      filename: "app.[contenthash].css"
    }),
    new BrowserSyncPlugin({
      proxy: process.env.DEV_URL,
      files: [
        "./dist/hashed-assets.json",
        "**/**.php",
        "./img/**",
        "./tailwind.config.js"
      ]
    })
  ]
};
