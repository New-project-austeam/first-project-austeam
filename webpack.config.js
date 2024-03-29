const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const FixStyleOnlyEntriesPlugin = require("webpack-fix-style-only-entries");
const { webpack } = require('webpack');


module.exports = {
  devtool: 'source-map',
  entry: {
    "index": "./public/assets/js/index.js",
    "main": "./public/assets/sass/main.scss"
  },


  output: {
    filename: "[name].js",
    path: path.resolve(__dirname, './public/dist/js')
  },
  mode: "development",
  module: {

    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: [
          {
            loader: 'babel-loader',
            options: {
              presets: ['@babel/preset-env']
            }
          }
        ]
      },
      {
        test: /\.(svf|png|jpg|gif|jpeg)$/,
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
