var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        'bootstrap.min.css',
        'font-awesome.min.css',
        'prettyPhoto.css',
        'animate.css',
        'main.css',
        'responsive.css',
    ], 'public/css/codeCommerce.css');

    mix.scripts([
        'jquery.js',
        'bootstrap.min.js',
        'jquery.scrollUp.min.js',
        'price-range.js',
        'jquery.prettyPhoto.js',
        'main.js',
    ], 'public/js/codeCommerce.js');

    mix.version([
        'css/codeCommerce.css',
        'js/codeCommerce.js'
    ]);

    mix.copy('resources/assets/fonts', 'public/build/fonts');
    mix.copy('resources/assets/images', 'public/build/images');
    mix.copy('resources/assets/images', 'public/images');
});
