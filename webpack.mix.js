const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        // Additional PostCSS plugins, if needed
    ])
    .styles([
        'node_modules/bootstrap/dist/css/bootstrap.css', // Include Bootstrap CSS
        'resources/css/app.css', // Add your custom CSS if needed
    ], 'public/css/all.css') // Combine them into a single CSS file
    .version(); // Append version to assets for cache busting
