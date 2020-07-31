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
   mix.js('resources/assets/js/bootstrap.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .mix.copyDirectory('resources/theme/beagle', 'public/theme/beagle')
   .mix.copyDirectory('resources/ventura/assets', 'public/admin_pub/ventura/assets')
   .mix.copyDirectory('resources/beagle/assets', 'public/admin_pub/beagle/assets')
   .mix.copyDirectory('resources/plugin/', 'public/admin_pub/plugin/');
