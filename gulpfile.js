var elixir = require('laravel-elixir');
var BrowserSync = require('laravel-elixir-browsersync');


var paths = {
'bourbon': './node_modules/bourbon/app/assets/stylesheets/',
'susy': './bower_components/susy/sass/'
}

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
    mix.sass('styles.scss', './public/css/styles.css', {includePaths: [paths.bourbon, paths.susy]})
        .browserSync({
            files: [
                'public/css/*.css',                     
                'resources/views/**/*.blade.php',       
                'app/**/*.php'                      
            ],
            proxy: 'christopher.app',
            logPrefix: "Laravel Eixir BrowserSync",
            logConnections: false,
            reloadOnRestart: false,
            notify: false,
            open: false
        });
});