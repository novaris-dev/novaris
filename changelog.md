# Changelog

All notable changes to Novaris will be documented in this file.

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
