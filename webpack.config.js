const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const FixStyleOnlyEntriesPlugin = require("webpack-fix-style-only-entries");


module.exports = {
  entry: {
    "index": "./assets/js/index.js",
    "main": "./assets/sass/main.scss"
  },


  output: {
    filename: "[name].js",
    path: path.resolve(__dirname, './dist/js'),
    publicPath: ""
  },
  module: {
    rules: [
      {
        test: /\.(svf|png|jpg|gif)$/,
        use: [
          {
            loader: "file-loader",
            options: {
              name: '[name].[ext]',
              outputPath: "../images",
              publicPath: "../images"
            }
          }

        ]
      },


      {
        test: /\.(css|scss|sass)$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: "css-loader",
          },
          {
            loader: "postcss-loader",
            options: {
              postcssOptions: {
                plugins: [
                  "precss",
                  "autoprefixer",
                ]
              },
            }
          },
          {
            loader: "sass-loader",
          },
        ]
      }

    ],

  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '../css/main.css',
    }),
    new FixStyleOnlyEntriesPlugin(),
  ]
}