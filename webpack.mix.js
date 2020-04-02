const mix = require('laravel-mix');

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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');


    mix.combine([

        'resources/assets/css/plugins.css',
        'resources/assets/css/styles.css',
    ],  'public/blog/assets/css/all.css');
    
    
    mix.combine([
        'resources/assets/js/jquery.min.js',
        'resources/assets/js/popper.min.js',
        'resources/assets/js/bootstrap.min.js',
        'resources/assets/js/aos.js',
        'resources/assets/js/perfect-scrollbar.jquery.min.js',
        'resources/assets/js/owl.carousel.min.js',
        'resources/assets/js/jquery-rating.js',
        'resources/assets/js/slick.js',
        'resources/assets/js/slider-bg.js',
        'resources/assets/js/lightbox.js',
        'resources/assets/js/imagesloaded.js',
        'resources/assets/js/isotope.min.js',
        'resources/assets/js/custom.js',
      
    ],'public/blog/assets/js/all.js');