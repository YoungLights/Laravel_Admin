const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
.sass('resources/sass/style.sass', 'public/css')
.browserSync({proxy: 'http://localhost:8000/'});
