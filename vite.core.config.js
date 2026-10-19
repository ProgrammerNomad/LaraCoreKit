import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    publicDir: false,
    plugins: [tailwindcss()],
    build: {
        outDir: 'packages/core/resources/dist',
        emptyOutDir: true,
        rollupOptions: {
            input: 'packages/core/resources/css/app.css',
            output: { assetFileNames: 'laracorekit.css' },
        },
    },
});
