const mix = require('laravel-mix');

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

mix.js('resources/js/app.js','resources/js/boostrap.js','resources/js/custom.js','resources/js/jquery.collapsible.min.js','resources/js/jquery.js','resources/js/masonry.pkgd.min,js','resources/js/swiper.js',
	'resources/js/swiper.min.js','public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles(['resources/css/boostrap.css','resources/css/boostrap.min.css','resources/css/elegant-font.css','resources/css/font-awesome.css','resources/css/font-awesome.min.css','resources/css/swiper.css','resources/css/swiper.min.css','resources/css/themify-icons.css','resources/css/style.css'],'public/css/all.css');