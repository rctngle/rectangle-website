/* global __dirname */

const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')

module.exports = [{
	entry: {
		scripts: './src/javascript/scripts.js',
		admin: './src/sass/admin.scss',
		editor: './src/sass/editor.scss',
		screen: './src/sass/screen.scss',
	},
	output: {
		filename: 'scripts/[name].js',
		path: path.resolve(__dirname, './build')
	},  
	module: {
		rules: [
			{
				test: /\.(js|jsx)$/,
				exclude: /node_modules/,
				loader: 'babel-loader',
				query: {
					presets: [
						'@babel/preset-env',
						'@babel/preset-react'
					]
				}
			},
			{
				test: /\.s[ac]ss$/i,
				exclude: /node_modules/,
				use: [
					MiniCssExtractPlugin.loader,
					'css-loader',
					'postcss-loader',
					'sass-loader',
				],
			},
			{
				test: /\.(woff|woff2|eot|ttf|otf)$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							name: '[name].[ext]',
							outputPath: '../build/fonts',
							publicPath: '../../build/fonts',
						}
					}
				]				
			}
		]
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: 'styles/[name].css',
			chunkFilename: 'styles/[name].css'
		})
	]
}]