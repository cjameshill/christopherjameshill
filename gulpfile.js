var elixir = require('laravel-elixir');
var BrowserSync = require('laravel-elixir-browsersync');

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

elixir(function (mix) {
    mix.sass('app.scss', './public/css/app.css')
    mix.sass('styles.scss', './public/css/styles.css')
        .browserSync({
            files: [
                'public/css/*.css',                     // This is the one required to get the CSS to inject
                'resources/views/**/*.blade.php',       // Watch the views for changes & force a reload
                'app/**/*.php'                      // Watch the app files for changes & force a reload
            ],
            proxy: 'christopher.app',
            logPrefix: "Laravel Eixir BrowserSync",
            logConnections: false,
            reloadOnRestart: false,
            notify: false,
            open: false
        });
});