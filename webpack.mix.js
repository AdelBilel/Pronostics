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

mix.styles([ 
    'resources/assets/css/main.css',
    'resources/assets/css/font-awesome.min.css',
    'resources/assets/css/noscript.css' 
     
     
], 'public/css/app.css') 
.scripts([ 
    'resources/assets/js/jquery-3.3.1.js',
    'resources/assets/js/app.js', 
    'resources/assets/js/bootstrap.js',
    'resources/assets/js/jquery.min.js',
    'resources/assets/js/jquery.scrollex.min.js',
    'resources/assets/js/jquery.scrolly.min.js',
    'resources/assets/js/main.js',
    'resources/assets/js/skel.min.js',
    'resources/assets/js/util.js'
    
    
    
    
    

     
    
], 'public/js/app.js');