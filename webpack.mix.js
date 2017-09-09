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
   .scripts([
     'public/frontend/js/bootstrap.min.js.js',
     'public/frontend/js/wow.min.js',
     'public/frontend/js/swiper.min.js',
     'public/frontend/js/swiper.jquery.min.js',
     'public/frontend/js/home-swiper.js',
     'public/frontend/js/home-wow.js',
     'public/frontend/js/projects-call-item.js',
     'public/frontend/js/service-call-item.js',
     'public/frontend/js/twitter.js',
     'public/js/jquery.elevateZoom-3.0.8.min.js',
   ], 'public/js/all.js')
   .styles([
     'public/frontend/css/bootstrap.min.css',
     'public/frontend/css/animate.min.css',
     'public/frontend/css/swiper.min.css',
     'public/frontend/css/font-awesome.min.css',
     'public/frontend/css/styles.css',
   ], 'public/css/styles.css');
