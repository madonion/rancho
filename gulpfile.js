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

/*
elixir(function(mix) {
    mix.sass('app.scss');
});
*/

elixir(function(mix) {
  mix.browserSync(
      {
        proxy:"rancho.app",
        logPrefix: "Laravel Elixir BrowserSync",
        logConnections: false,
        reloadOnRestart: false,
        notify: false
      }
  );
  var bootstrapPath = 'node_modules/bootstrap-sass/assets';
  mix.sass('app.scss')
    .copy(bootstrapPath + '/fonts', 'public/fonts')
    .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js');
});
