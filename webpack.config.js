const path = require('path');

module.exports = {
  entry: './src/js/index.js', // Main JS file
  output: {
    filename: 'bundle.js', // Output filename
    path: path.resolve(__dirname, 'dist/js'), // Output directory
  },
  module: {
    rules: [
      {
        test: /\.css$/, // Match CSS files
        use: ['style-loader', 'css-loader'], // Loaders for CSS
      },
    ],
  },
//   mode: 'production', // Use 'development' for easier debugging
  mode: 'development', // Set to 'development' for easier debugging
  devtool: 'source-map', // Enables source maps
  watchOptions: {
    ignored: /node_modules/, // Avoid watching unnecessary files
  },
};
