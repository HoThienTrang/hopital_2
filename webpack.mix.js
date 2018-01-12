let mix = require('laravel-mix');

const NODE_MODULES = 'node_modules/';
const PATH_CSS = 'resources/assets/css/';
const PATH_JS = 'resources/assets/js/';
const PATH_PUBLIC_COMMON = 'public/common/';

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
   .sass('resources/assets/sass/app.scss', 'public/css')
   .copyDirectory(NODE_MODULES + 'bootstrap', PATH_PUBLIC_COMMON + 'bootstrap')
   .copyDirectory(NODE_MODULES + 'font-awesome', PATH_PUBLIC_COMMON + 'font-awesome')
   .copyDirectory(NODE_MODULES + 'nprogress', PATH_PUBLIC_COMMON + 'nprogress')
   .copyDirectory(NODE_MODULES + 'icheck', PATH_PUBLIC_COMMON + 'icheck')
   .copyDirectory(NODE_MODULES + 'bootstrap-progressbar', PATH_PUBLIC_COMMON + 'bootstrap-progressbar')
   .copyDirectory(NODE_MODULES + 'jqvmap', PATH_PUBLIC_COMMON + 'jqvmap')
   .copyDirectory(NODE_MODULES + 'skycons', PATH_PUBLIC_COMMON + 'skycons')
   .copyDirectory(NODE_MODULES + 'flot', PATH_PUBLIC_COMMON + 'flot')
   .copyDirectory(NODE_MODULES + 'flot-orderbars', PATH_PUBLIC_COMMON + 'flot-orderbars')
   .copyDirectory(NODE_MODULES + 'bootstrap-daterangepicker', PATH_PUBLIC_COMMON + 'bootstrap-daterangepicker')
   .copyDirectory(NODE_MODULES + 'jquery', PATH_PUBLIC_COMMON + 'jquery')
   .copyDirectory(NODE_MODULES + 'animate.css', PATH_PUBLIC_COMMON + 'animate')
   .copyDirectory(PATH_CSS + 'admin', 'public/admin/css')
   .copyDirectory(PATH_JS + 'admin', 'public/admin/js');
