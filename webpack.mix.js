const mix = require('laravel-mix');

// Configuration
mix.setPublicPath('public/')
mix.setResourceRoot('../')

// Public
mix.js('resources/scripts/app.js', 'public/js')
mix.sass('resources/styles/app.scss', 'public/css')

// Admin
mix.js('resources/scripts/admin.js', 'public/js')
mix.sass('resources/styles/admin.scss', 'public/css')
