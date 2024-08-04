import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import autoprefixer from "autoprefixer";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        host: true, // Your local ip address
        hmr: {
            host: "192.168.100.37",
        },
    },
});
