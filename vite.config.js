import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/check_show.js',
                'resources/js/confirm_delete.js'
            ],
            refresh: true,
        }),
    ],
});
