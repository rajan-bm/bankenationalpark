import { defineConfig } from "vite";
import path from "path";

export default defineConfig({
  root: "./src",
  base: "",
  plugins: [],
  build: {
    outDir: "../dist",
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, "src/js/main.js"),
      },
      output: {
        entryFileNames: "main.js",
        assetFileNames: "main.css",
      }
    },
  },
});
