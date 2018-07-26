let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
	.js('resources/assets/js/jquery-3.3.1.min.js', 'public/js')
	.js('resources/assets/js/jquery-ui.js', 'public/js')
	.css('resources/assets/css/*', 'public/css')
   .sass('resources/assets/sass/app.scss', 'public/css');
