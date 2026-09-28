/**
 * Theme Export Script (Vite)
 *
 * Copies only the files/folders you specify into an export directory.
 * Run your Vite build first so /public contains the optimized assets + manifest.
 *
 * Usage:
 *   npm run build
 *   node export-theme.js
 */

import fs from 'node:fs';
import path from 'node:path';

const fsp = fs.promises;

// === Configure ===
const exportPath = 'amicable'; // folder to export into

// Root-level files to include.
const files = [
	'theme.json',
];

// Folders to include.
const folders = [
	'app',
	'config',
	'public',
];

// Items to delete after copy.
const removeAfterCopy = [
	// Keep Vite's public/assets/manifest.json on purpose.
	path.join( exportPath, 'vendor/bin' ),
	path.join( exportPath, 'vendor/composer/installers' ),
];

// === Helpers ===
async function exists( filePath ) {
	try {
		await fsp.access( filePath );

		return true;
	} catch {
		return false;
	}
}

async function rimraf( filePath ) {
	await fsp.rm( filePath, {
		recursive: true,
		force: true,
	} );
}

async function copyFileIfExists( source, destination ) {
	if ( await exists( source ) ) {
		await fsp.mkdir( path.dirname( destination ), {
			recursive: true,
		} );

		await fsp.copyFile( source, destination );
	}
}

async function copyDirIfExists( source, destination ) {
	if ( await exists( source ) ) {
		await fsp.cp( source, destination, {
			recursive: true,
			force: true,
		} );
	}
}

async function main() {
	// Start clean.
	await rimraf( exportPath );

	// Copy listed files.
	for ( const file of files ) {
		const source      = path.resolve( file );
		const destination = path.join( exportPath, file );

		await copyFileIfExists( source, destination );
	}

	// Copy listed folders.
	for ( const folder of folders ) {
		const source      = path.resolve( folder );
		const destination = path.join( exportPath, folder );

		await copyDirIfExists( source, destination );
	}

	// Post-copy cleanup.
	for ( const filePath of removeAfterCopy ) {
		await rimraf( filePath );
	}

	console.log( `Export complete → ${exportPath}` );
}

main().catch( ( error ) => {
	console.error( 'Export failed:', error );
	process.exit( 1 );
} );