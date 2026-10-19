import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    publicDir: false,
    plugins: [tailwindcss()],
    build: {
        outDir: 'public/vendor/laracorekit',
        emptyOutDir: true,
        rollupOptions: {
            input: 'resources/css/starter.css',
            output: { assetFileNames: 'laracorekit.css' },
        },
    },
});
