import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
import { resolve } from 'node:path';

export default defineConfig({
    plugins: [
        tailwindcss(),
    ],
    resolve: {
        alias: {
            '~': resolve(__dirname, './'),
            '@': resolve(__dirname, 'src'),
        }
    },
    build: {
        outDir: 'inc/build',
        manifest: true,
        rolldownOptions: {
            input: {
                main: 'src/main.ts',
                server: 'src/pages/server/render.ts',
                'server-dashboard': 'src/pages/server/dashboard/render.ts',
                'analytics': 'src/pages/server/analytics/render.ts',
                'analytics-visitors': 'src/pages/server/analytics/visitors/render.ts',
                'analytics-authors': 'src/pages/server/analytics/authors/render.ts',
                app: 'src/pages/app/render.ts',
            },
            output: {
                entryFileNames: 'js/[name].js',
                chunkFileNames: 'js/[name].js',
                assetFileNames: (assetInfo) => {
                    const ext = assetInfo.names[0].split('.').pop()
                    return `assets/${ext}/[name][extname]`
                },
            }
        }
    }
})