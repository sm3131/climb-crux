import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/createBlog.js',
                'resources/js/editBlog.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: './public/build',
        publicPath: '/build/assets',
    },
    server: {
        https: true,
    },
});
