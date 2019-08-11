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

//mix.js('resources/js/app.js', 'public/js')
    //.sass('resources/sass/app.scss', 'public/css');

mix.js([
    'resources/js/js_template/jquery/jquery-2.2.4.min.js',
    'resources/js/js_template/bootstrap/popper.min.js',
    'resources/js/js_template/bootstrap/bootstrap.min.js',
    'resources/js/js_template/active.js'
], 'public/js/out_template.js').
style(['resources/css/style.css'],'public/css/out_template.css');
