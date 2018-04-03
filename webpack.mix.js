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

mix.js(['resources/assets/js/header_script.js',
    'resources/assets/js/header_script_2.js',],
    'public/js/script.js')
   .sass('resources/assets/sass/app.scss', 'public/css');



mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'resources/assets/css/custom.css',
], 'public/css/style.css');

mix.copyDirectory('resources/assets/img', 'public/img');