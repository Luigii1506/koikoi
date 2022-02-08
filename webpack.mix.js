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
    .postCss('resources/css/app.css', 'public/css')
    .postCss('resources/css/bootstrap.min.css', 'public/css/bootstrap.min');
    
//mix.sass('resources/sass/app.scss', 'public/css');



