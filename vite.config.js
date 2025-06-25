import laravel from 'laravel-vite-plugin'
import { defineConfig } from 'vite'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/contacts.css',
                'resources/css/conscripts.css',
                'resources/css/contracts.css',
                'resources/css/forms.css'
            ],
            refresh: true,
        }),
    ],
});
