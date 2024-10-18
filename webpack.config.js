const path = require('path');
const {CleanWebpackPlugin} = require("clean-webpack-plugin");
const {WebpackManifestPlugin} = require("webpack-manifest-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const env = process.env.NODE_ENV ? process.env.NODE_ENV : 'development';

module.exports = {
    mode: env,
    entry: {
        homepage: [
            path.resolve('./assets/scripts/homepage.entry.js')
        ]
    },
    output: {
        path: path.resolve(__dirname, "./public/build/"),
        filename: "js/[name].[chunkhash].js"
    },
    plugins: [
        new CleanWebpackPlugin(),
        new MiniCssExtractPlugin({
            filename: 'css/[name].[contenthash].css'
        }),
        new WebpackManifestPlugin(
            {
                fileName: 'manifest.json',
                publicPath: '/build'
            }
        )
    ],
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader
                    },
                    {
                        loader: 'css-loader'
                    },
                    {
                        loader: 'sass-loader'
                    }
                ]
            }
        ]
    }
}
