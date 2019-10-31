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





   mix.sass('resources/assets/sass/app.scss', 'public/css').version();
   mix.sass('resources/assets/sass/mob.scss', 'public/css').version();

   mix.scripts([
         'resources/assets/js/jquery.min.js'
     ], 'public/js/jquery.js');

  mix.scripts([
        'resources/assets/js/unslider-min.js'
    ], 'public/js/unslider.js');

  mix.scripts([
       'resources/assets/js/mob-nav.js'
   ], 'public/js/mob-nav.js');
