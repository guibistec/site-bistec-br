const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.
    styles([
        'resources/views/css/style.css',
        'resources/views/css/styleDark.css',
        'resources/views/css/styleMobile.css',
        'resources/views/css/styleTablet.css',
        'resources/views/css/styleTelaQuadrada.css',
        'resources/views/css/styleTv.css',
    ], 'public/css/style.css').

    scripts([
        'resources/views/js/main.js',
    ], 'public/js/main.js').

    styles([
        'resources/views/css/styleSuporte.css',
    ], 'public/css/styleSuporte.css').
    styles([
        'resources/views/css/styleProdutos.css',
    ], 'public/css/styleProdutos.css').
    styles([
        'resources/views/css/styleErro404.css',
    ], 'public/css/styleErro404.css').
    styles([
        'resources/views/css/styleEmail.css',
    ], 'public/css/styleEmail.css').
    styles([
        'resources/views/css/styleContato.css'
    ], 'public/css/styleContato.css');