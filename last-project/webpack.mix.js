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

mix.autoload({
    'jquery': ['jQuery', '$']
});

mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.css',
    'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css',
    'resources/css/app.css'
], 'public/css/app.css');

mix.js([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/popper.js/dist/popper.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
    'resources/js/app.js'
], 'public/js/app.js');

mix.vue();

mix.sass('resources/sass/app.scss', 'public/css');
