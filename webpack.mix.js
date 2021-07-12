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
 mix.styles([
     'resources/admin/assets/bootstrap/css/bootstrap.min.css',
     'resources/admin/assets/font-awesome/4.5.0/css/font-awesome.min.css',
     'resources/admin/assets/ionicons/2.0.1/css/ionicons.min.css',
     'resources/admin/assets/plugins/iCheck/all.css',
     'resources/admin/assets/plugins/datepicker/datepicker3.css',
     'resources/admin/assets/plugins/select2/select2.min.css',
     'resources/admin/assets/plugins/datatables/dataTables.bootstrap.css',
     'resources/admin/assets/dist/css/AdminLTE.min.css',
     'resources/admin/assets/dist/css/skins/_all-skins.min.css',

 ], 'public/css/admin.css');

mix.styles([
    'resources/blog/assets/vendor/bootstrap/css/bootstrap.min.css',
    'resources/blog/assets/vendor/bootstrap/css/mine.css',
    'resources/blog/assets/vendor/font-awesome/css/font-awesome.min.css',
    'resources/blog/assets/vendor/ionicons/css/ionicons.min.css',
    'resources/blog/assets/vendor/owl.carousel/assets/owl.carousel.min.css',
    'resources/blog/assets/vendor/venobox/venobox.css',
    'resources/blog/assets/css/style.css',
], 'public/css/blog.css');

mix.scripts([
    'resources/admin/assets/plugins/jQuery/jquery-2.2.3.min.js',
    'resources/admin/assets/bootstrap/js/bootstrap.min.js',
    'resources/admin/assets/plugins/datatables/jquery.dataTables.min.js',
    'resources/admin/assets/plugins/select2/select2.full.min.js',
    'resources/admin/assets/plugins/datepicker/bootstrap-datepicker.js',
    'resources/admin/assets/plugins/datatables/dataTables.bootstrap.min.js',
    'resources/admin/assets/plugins/slimScroll/jquery.slimscroll.min.js',
    'resources/admin/assets/plugins/fastclick/fastclick.js',
    'resources/admin/assets/plugins/iCheck/icheck.min.js',
    'resources/admin/assets/dist/js/app.min.js',
    'resources/admin/assets/dist/js/demo.js',
    'resources/admin/assets/dist/js/script.js',
], 'public/js/admin.js');

mix.scripts([
    'resources/blog/assets/vendor/jquery/jquery.min.js',
    'resources/blog/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
    'resources/blog/assets/vendor/jquery.easing/jquery.easing.min.js',
    'resources/blog/assets/vendor/php-email-form/validate.js',
    'resources/blog/assets/vendor/waypoints/jquery.waypoints.min.js',
    'resources/blog/assets/vendor/counterup/jquery.counterup.min.js',
    'resources/blog/assets/vendor/owl.carousel/owl.carousel.min.js',
    'resources/blog/assets/vendor/typed.js/typed.min.js',
    'resources/blog/assets/vendor/venobox/venobox.min.js',
    'resources/blog/assets/js/main.js',
], 'public/js/blog.js');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copy('resources/front/fonts', 'public/fonts');
mix.copy('resources/front/images', 'public/images');

mix.copy('resources/blog/assets/img', 'public/images');
