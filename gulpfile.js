const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('app.scss')
    	.version('css/app.css')
    	.webpack('app.js')
    	.version('js/app.js')
        .copy('resources/assets/images', 'public/images')
        .version('public/images')
        .copy('node_modules/font-awesome/fonts', 'public/fonts')
        .version('public/fonts');
});