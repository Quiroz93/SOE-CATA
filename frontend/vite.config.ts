
import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import { resolve } from 'path';

// Configuración profesional Vite para Vue 3 + TS + Tailwind
export default defineConfig({
  plugins: [vue()],
  resolve: {
    alias: {
      '@': resolve(__dirname, 'src'),
    },
  },
  build: {
    target: 'es2020',
    outDir: 'dist',
    sourcemap: false,
    minify: 'esbuild',
    cssCodeSplit: true,
    rollupOptions: {
      output: {
        manualChunks: undefined, // Dejar que Vite optimice
      },
    },
  },
  server: {
    port: 5173,
    strictPort: true,
    open: true,
  },
  preview: {
    port: 4173,
    strictPort: true,
  },
});
