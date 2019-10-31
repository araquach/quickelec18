var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.copy(
        'node_modules/jquery/dist/jquery.min.js',
        'resources/assets/js'
    );
    
    mix.copy(
        'node_modules/jquery-unslider/dist/js/unslider-min.js',
        'resources/assets/js'
    );
    
    mix.copy(
        'node_modules/jquery-unslider/dist/sass/unslider.scss',
        'resources/assets/sass'
    );
    
    mix.copy(
        'node_modules/jquery-unslider/dist/sass/unslider-dots.scss',
        'resources/assets/sass'
    );
    
    mix.scripts([
        'jquery.min.js'
     ], 'public/js/jquery.js');
     
    mix.scripts([
        'mob-nav.js'
     ], 'public/js/mob-nav.js');
     
    mix.scripts([
        'unslider-min.js'
     ], 'public/js/unslider.js') 

    mix.sass(['app.scss',
              'unslider.scss',
              'unslider-dots.scss'
    ]);
    
    mix.version('public/css/app.css');
});
