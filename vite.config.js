import { defineConfig } from 'vite';
import path from 'node:path';

export default defineConfig({
	publicDir: false,

	build: {
		outDir: 'public/assets',
		assetsDir: '',
		manifest: 'manifest.json',
		emptyOutDir: true,

		rollupOptions: {
			input: {
				app: path.resolve(
					import.meta.dirname,
					'resources/js/app.js'
				),
				screen: path.resolve(
					import.meta.dirname,
					'resources/scss/screen.scss'
				),
			},

			output: {
				entryFileNames: 'js/[name]-[hash].js',
				chunkFileNames: 'js/[name]-[hash].js',

				assetFileNames: ( { name } ) => {
					if ( name && name.endsWith( '.css' ) ) {
						return 'css/[name]-[hash][extname]';
					}

					return 'media/[name]-[hash][extname]';
				},
			},
		},
	},
});