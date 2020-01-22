const mix = require('laravel-mix')
const tailwindcss = require('tailwindcss')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .webpackConfig({
    module: {
      rules: [
        {
          enforce: 'pre',
          exclude: /node_modules/,
          loader: 'eslint-loader',
          test: /\.(js|vue)?$/,
          options: {
            fix: true
          }
        },
      ]
    },
    resolve: {
      alias: {
        '@': path.resolve(__dirname, 'resources/js/')
      }
    },
    output: { chunkFilename: '[name].js?id=[chunkhash]' },
  })
  .js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .options({
    processCssUrls: false,
    postCss: [
      tailwindcss('./tailwind.config.js'),
    ],
  })
  .version()
  .disableSuccessNotifications()

if (mix.inProduction()) {
  mix.sourceMaps()
}
