import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'dist',
        assetsDir: 'assets',
        rollupOptions: {
            input: {
                app: './resources/js/app.js'
            }
        }
    },
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
});
