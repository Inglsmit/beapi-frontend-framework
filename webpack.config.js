/**
 * Dependencies
 */
const webpack 					= require('webpack'),
	  path 						= require('path'),
	  ExtractTextPlugin 		= require('extract-text-webpack-plugin'),
	  UglifyJsPlugin			= require('uglifyjs-webpack-plugin'),
	  OptimizeCssAssetsPlugin 	= require('optimize-css-assets-webpack-plugin'),
	  ManifestPlugin			= require('webpack-manifest-plugin'),
	  CleanWebpackPlugin		= require('clean-webpack-plugin'),
	  cssLoaders				= require('./webpack.css-loader.js'),
	  dev						= process.env.NODE_ENV === 'dev';

let root = path.resolve( __dirname );


process.traceDeprecation = true

let config = {
	entry: {
		app: ['./assets/css/style.scss', './assets/js/app.js']
	},
	output: {
		path: path.resolve( __dirname, './dist' ),
		filename: dev ? '[name].js' : '[name].[chunkhash:8].js' 
	},
	watch: dev,
	devtool: dev ? 'source-map' : false,
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /(node_modules|bower_components)/,
				include: root,
				use: ['babel-loader']
			},
			{
				test: /\.css$/,
				use: ExtractTextPlugin.extract({
					fallback: 'style-loader',
					use: [...cssLoaders, 'resolve-url-loader']
				}),
			},
			{
		      	test: /\.(sass|scss)$/,
		      	use: ExtractTextPlugin.extract({
					use: [...cssLoaders, 'sass-loader']
		      	})
		    },
			{
				test: /\.(woff2?|eot|ttf|otf|mp3|wav)(\?.*)?$/,
				use: {
            		loader: 'file-loader',
            		options: {
            			name:'[name].[ext]',
            			outputPath: './fonts/'
            		}
            	}
			},
			{
				test: /\.(png|jpe?g|gif|svg)$/,
				use: [
					{
						loader: 'url-loader',
						options: {
							limit: 8192,
							name: '[name].[ext]',
							outputPath: './img/'
						}
	            	},
	            	{
	            		loader: 'img-loader',
	            		options: {
	            			enabled: !dev
	            		}
	            	}
            	]
			}
		]
	},
	plugins: []
}

/**
 * Production
 */
if(!dev) {
	/**
	 * Styles
	 */
	
	config.plugins.push( new ExtractTextPlugin({
		filename: '[name].[contenthash:8].min.css',
		allChunks: true,
	}));
	
	config.plugins.push( new OptimizeCssAssetsPlugin({
	    assetNameRegExp: /\.min\.css$/,
	    cssProcessorOptions: {
	    	discardComments: {
	    		removeAll: true
	    	}
	    }
	}));
	
	/**
	 * Scripts
	 */
	config.plugins.push( new UglifyJsPlugin({
		sourceMap: true,
		comments: false
    }));

	/**
	 * Assets
	 * Using on production to load dynamically scripts and style with hashes
	 */
    config.plugins.push( new ManifestPlugin({
    	fileName: 'assets.json'
	}));


    /**
     * Clean dist directory before prod build
     */
	config.plugins.push( new CleanWebpackPlugin(['dist'], {
		root: path.resolve('./'),
		verbose: true,
		dry: false
    }));
} else {
	/**
	 * Styles
	 */
	config.plugins.push( new ExtractTextPlugin({
		filename: '[name].css',
		allChunks: true,
	}));
}

module.exports = config;
