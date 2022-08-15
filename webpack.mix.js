const mix = require('laravel-mix');
require('dotenv').config();
const domain = process.env.APP_DOMAIN;

mix.browserSync({
    proxy: domain
});

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

mix
.sass('resources/sass/front/style.scss', 'public/css/front/style.css')

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.options({
    processCssUrls: false,
})
