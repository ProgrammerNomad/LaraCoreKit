import { defineConfig } from 'vite';
export default defineConfig({
    publicDir: false,
    build: {
        outDir: 'public/vendor/laracorekit',
        emptyOutDir: false,
        lib: { entry: 'resources/js/showcase.js', name: 'LaraCoreKitShowcase', formats: ['iife'], fileName: () => 'showcase.js', cssFileName: 'showcase' },
    },
});
