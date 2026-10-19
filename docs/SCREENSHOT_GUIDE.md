# Real application screenshots

Screenshots are generated from a disposable local SQLite application, never customer data. Files are stored in `docs/images/screenshots` for the README and `public/images/screenshots` for the website. They show the host application, including optional showcase features.

## Reproduce

Install the project dependencies and build assets. Configure an isolated test process with `APP_ENV=testing`, `DB_CONNECTION=sqlite`, `DB_DATABASE` pointing to a disposable file named `laracorekit-preview.sqlite`, `DEMO_MODE=false`, `CACHE_STORE=array`, `SESSION_DRIVER=file` and a localhost APP_URL. Create the empty file, run migrations, then `php tools/preview-seed.php`. The fixture refuses to run outside this setup.

Start `php artisan serve --host=127.0.0.1 --port=8765 --no-reload` with the same environment. With Playwright available, run `node tools/browser-smoke.cjs`. The script uses Edge by default; set PLAYWRIGHT_CHANNEL for a supported installed browser. Set LARACOREKIT_PREVIEW_URL if using a different local server URL.

The fixture's preview account is test-only and its password appears only in local test tooling. Do not deploy the fixture or reuse its credentials. No Packagist/GitHub account tokens are used in screenshots.

Captured pages include homepage, documentation, public blog, admin dashboard, blog management/editor, mobile navigation and UI showcase. Inspect images after capture; passing HTTP checks does not guarantee good layout. The README walkthrough GIF uses these actual views, with no placeholder UI.

Set `LARACOREKIT_CRAWL_SHOWCASE=true` when running the browser script to additionally validate every linked showcase URL. Theme and Arabic RTL checks capture additional real views.

## README animation

After browser capture succeeds, run `python tools/build-demo-gif.py` (requires Pillow). It creates `docs/images/screenshots/walkthrough.gif`, a 960x720 four-view, 12-second loop covering the public homepage, blog, admin and documentation. Static screenshots remain available. Inspect each frame and keep the GIF below 1 MB; regenerate it when branding or primary screens change.
