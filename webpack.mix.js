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


mix.copy( 'resources/images', 'public/images', false );

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/bootstrap.min.js', 'public/js/bootstrap.min')
    .js('resources/js/owl.carousel.min.js', 'public/js/owl.carousel.min')
    .js('resources/js/main.js', 'public/js/main.js')
    .postCss('resources/css/app.css', 'public/css')
    .postCss('resources/css/bootstrap.min.css', 'public/css/bootstrap.min')
    .postCss('resources/css/owl.carousel.min.css', 'public/css/owl.carousel.min')
    .postCss('resources/css/owl.theme.default.min.css', 'public/css/owl.theme.default.min');
    
//mix.sass('resources/sass/app.scss', 'public/css');



