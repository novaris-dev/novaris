# Novaris

Novaris is a lightweight, flat-file content management system built with PHP. It is designed to provide a simple and flexible foundation for building websites without the need for a database.

Content is written in Markdown, while themes handle the presentation of the site. Novaris includes support for custom content types, taxonomies, routing, templates, themes, caching, and static site generation.

Whether you're building a blog, personal website, documentation site, or something entirely your own, Novaris aims to keep the development experience simple while giving you the flexibility to build the site you want.

## Requirements
Before installing Novaris, make sure your environment meets the following requirements:

* PHP 8.2 or higher
* Composer
* Apache or Nginx

For theme and frontend development
* Nodejs
* npm

## Installation
Clone the Novaris repository:
<pre>
git clone https://github.com/novaris-dev/novaris.git
cd novaris
</pre>

Install the PHP dependencies
<pre>
Composer install
</pre>

If you are developing a theme or working with frontend assets, install the Node.js dependencies:
<pre>
npm install
</pre>

Start the frontend development environment:
<pre>
npm run dev
</pre>

## Starting your own theme

Novaris doubles as a starter theme. When you copy it to build your own, give the copy its own identity first. The framework reads `theme.json` to install and update themes, so leaving the Novaris values in place makes your site check the Novaris repository for updates.

1. **`theme.json`**: set your theme's details:
   <pre>
   {
       "name": "My Theme",
       "slug": "my-theme",
       "version": "0.0.1",
       "repository": "your-name/my-theme"
   }
   </pre>
   - `slug` is the theme's folder name, in lowercase with hyphens.
   - `version` stays at `0.0.1` until your first release. Then keep it in step with your release tags, because updates are found by comparing it with the latest GitHub release of `repository`.
   - `repository` is your theme's GitHub `owner/name`. Leave it empty (`""`) if you don't publish releases; the update check is skipped when it's missing.
2. **`export-theme.js`**: change `exportPath` from `'novaris'` to your slug.
3. **`package.json`**:
   - Change `name`, `description`, `author`, `homepage`, `repository` and `bugs` to your own.
   - In the `watch:novaris` script, replace the `--url=` address with your site's address.
4. **`composer.json`**: change `name` (for example `your-name/my-theme`).

The Novaris version in `theme.json` and `package.json` stays at `0.0.1` on purpose, so every new theme starts from there. Novaris releases themselves are tracked in `changelog.md` and the git tags.

## Documentation

Coming soon