const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir(mix => {
    //Location of SASS file relative to inside the package with the gulpfile.js.
    //The output (second param) should be the the Public directory of the package.
    mix.sass('./Curator/Resources/Assets/sass/mdb.scss', './Curator/Public/css')
       .sass('./Curator/Resources/Assets/sass/font-awesome/font-awesome.scss', './Curator/Public/css')

    //Copy Curator assets to respective public directories. The path is relative
    //to where the gulpfile.js is located. When installed with composer this is
    //typically: <Laravel Project Folder>/vendor/curator/curator/src/Public/

       .copy('./Curator/Public/img', './../../../../public/img/vendor/curator')
       .copy('./Curator/Public/js', './../../../../public/js/vendor/curator')
       .copy('./Curator/Public/font', './../../../../public/font/vendor/curator')
       .copy('./Curator/Public/css', './../../../../public/css/vendor/curator');
});
