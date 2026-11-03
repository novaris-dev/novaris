# Changelog

All notable changes to Novaris will be documented in this file.

## [0.0.3] - 11.02.2026

The SCSS utilities layer is now filled in. Helper classes are generated from the scales in `01.settings`; the other layers (elements, objects, layouts, components) stay empty for your own styles.

### Added

- Settings scales in `resources/scss/01.settings`: breakpoints, colors, content widths, border widths and radii, shadows and opacities, font families, sizes, weights and line heights, sizes, and a spacing scale built from `$spacing-steps` × `$spacing-unit`.
- `01.settings/09.utilities` options: `$utility-breakpoints` (which breakpoints get responsive classes, default `md` and `lg`) and `$utilities-important`.
- A `utility()` generator mixin in `02.tools/02.utilities` that builds a group of classes from any map, with optional responsive copies (`.md:grid-cols-3`). It can be used for your own classes too.
- `up()` and `down()` breakpoint mixins in `02.tools/01.breakpoints`; an unknown breakpoint name stops the build and lists the valid ones.
- `03.generics/02.tokens`: colors, font families and content widths as CSS custom properties (`--color-primary`, `--font-heading`, `--width-wide`), so they can be changed at run time.
- Generated helper classes in every `08.utilities` folder: backgrounds, borders and radii, shadows and opacity, flexbox, grid, display and position, lists, media, sizing, text, typography, plus accessibility (`.screen-reader-text`) and alignment classes.
- `08.utilities/15.spacings`: margin, padding and gap classes (`.mt-4`, `.px-6`, `.gap-4`, `.mx-auto`).
- `resources/scss/README.md` explaining how settings map to classes.

### Changed

- Requires PHP 8.2 or higher (`composer.json` and readme). The dependencies already needed 8.1, and the locked `nette/utils` needs 8.2.
- Updated `novaris-dev/framework` to 1.0.1.

## [0.0.2] - 09.30.2026

### Changed

- Requires `novaris-dev/framework` `^1.0` (the stable 1.0 release) instead of the `dev-develop` branch.

## [0.0.1] - 09.30.2026

Initial release of the Novaris starter theme. It provides templates, configuration and a build pipeline, and deliberately ships without styles.

### Added

- Base views in `resources/views`: the index layout, default header and footer, primary menu and pagination.
- Content templates for single posts, pages, collections, archives, the default fallback and 404 pages.
- Entry templates for collection and archive listings, including featured images and "Continue reading" excerpts.
- `config/app.php` with site title, tagline, timezone, date and time formats, primary navigation and featured image sizes (`post-thumbnail` and `novaris-landscape-medium`, `-large` and `-extra-large`).
- `config/content.php` with a `post` content type (routed under `/blog/{year}/{month}/{day}/{name}`, with date archives and a feed) and a `category` taxonomy.
- `config/template.php` registering the `archives`, `categories` and `recent_posts` template tags.
- Cache, fonts and markdown configuration files.
- An empty SCSS architecture in `resources/scss`, organized in eight layers from settings to utilities and loaded in order by `screen.scss`.
- A Vite build that compiles `resources/js/app.js` and `resources/scss/screen.scss` into hashed files in `public/assets`, with a `manifest.json`.
- npm scripts: `build` (production build and export), `dev` (unminified build that watches assets and runs the Novaris exporter), and `prod` and `export` separately.
- `export-theme.js`, which packages `theme.json`, `app`, `config`, `public/assets` and `resources` into a `novaris/` folder and removes the development-only `'private' => true` setting from the exported `config/app.php`.
- Sample content: a homepage, an About page and an example blog post.
- `.env.example` documenting the site URL and cache purge key.
