import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    server: {
    hmr: {
        host: 'localhost',
        overlay: false // 🔧 evita el overlay de error en pantalla,

      },
    },
  
    watch: {
                usePolling: true
    },
  
  optimizeDeps: {
      exclude: ['fsevents'], // 🔧 evita que Vite intente cargar fsevents
    },

  ssr: {
    external: ['fsevents'], // 🔧 también lo excluye en SSR
  },

  plugins: [
    laravel({
      input: ["resources/css/app.css", "resources/js/app.js"],
      refresh: true,
    }),
  ],

  css: {
    postcss: {
      plugins: [
        require('tailwindcss'),
        require('autoprefixer')
      ]
    }
  }

});