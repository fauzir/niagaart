const { mix } = require('laravel-mix');

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

mix.js('public/frontend/js/home-swiper.js', 'public/js')
   .js('public/frontend/js/home-wow.js', 'public/js')
   .js('public/frontend/js/projects-call-item.js', 'public/js')
   .js('public/frontend/js/service-call-item.js', 'public/js')
   .js('public/frontend/js/twitter.js', 'public/js')
   .styles('public/frontend/css/styles.css', 'public/css/styles.css');
