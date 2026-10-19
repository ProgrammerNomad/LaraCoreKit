import { defineConfig } from 'vite';
export default defineConfig({
    publicDir: false,
    build: {
        outDir: 'packages/core/resources/dist',
        emptyOutDir: false,
        lib: { entry: 'packages/core/resources/js/showcase.js', name: 'LaraCoreKitShowcase', formats: ['iife'], fileName: () => 'showcase.js', cssFileName: 'showcase' },
    },
});
