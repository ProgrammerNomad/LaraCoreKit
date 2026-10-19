// Requires Playwright and an isolated server prepared by tools/preview-seed.php.
const { chromium } = require('playwright');
const fs = require('node:fs');
const path = require('node:path');
const base = process.env.LARACOREKIT_PREVIEW_URL || 'http://127.0.0.1:8765';
const root = path.resolve(__dirname, '..');
let activeBrowser;

(async () => {
    const browser = await chromium.launch({ channel: process.env.PLAYWRIGHT_CHANNEL || 'msedge', headless: true });
    activeBrowser = browser;
    const context = await browser.newContext({ viewport: { width: 1440, height: 1000 } });
    const page = await context.newPage();
    page.setDefaultTimeout(15000);
    page.setDefaultNavigationTimeout(20000);
    const errors = [];
    page.on('pageerror', error => errors.push(error.message));
    async function visit(url) {
        console.log('Checking', url);
        const response = await page.goto(base + url, { waitUntil: 'networkidle' });
        if (!response || response.status() >= 400) throw new Error(`${url}: ${response?.status()}`);
    }
    async function capture(name, fullPage = false) {
        for (const folder of ['docs/images/screenshots', 'public/images/screenshots']) {
            fs.mkdirSync(path.join(root, folder), { recursive: true });
            await page.screenshot({ path: path.join(root, folder, name), fullPage });
        }
    }
    await visit('/');
    await capture('homepage.png');
    await visit('/docs/installation');
    await capture('documentation.png');
    await visit('/blog');
    await capture('blog.png');
    await visit('/blog/building-with-modules');
    await capture('blog-detail.png');
    await visit('/ui-showcase');
    const desktopSidebar = await page.locator('#showcase-navigation').boundingBox();
    if (!desktopSidebar || desktopSidebar.x < -1) throw new Error('Desktop component navigation is off screen. Rebuild CSS.');
    await capture('ui-showcase.png');
    if (process.env.LARACOREKIT_CRAWL_SHOWCASE === 'true') {
        const links = await page.locator('a[href]').evaluateAll(elements => [...new Set(elements.map(element => element.href).filter(url => url.startsWith(location.origin+'/ui-showcase/')))]);
        for (const url of links) {
            const response = await context.request.get(url);
            if (response.status() !== 200) throw new Error(`Showcase ${url}: ${response.status()}`);
        }
        console.log(`Validated ${links.length} showcase URLs.`);
    }
    await visit('/admin/login');
    await page.getByRole('textbox', { name: 'Email address' }).fill('preview@example.test');
    await page.locator('input[type="password"]').fill('preview-only-local-password');
    await page.getByRole('button', { name: 'Sign in', exact: true }).click();
    await page.waitForURL(base+'/admin', { timeout: 45000, waitUntil: 'domcontentloaded' });
    await page.waitForLoadState('networkidle');
    await page.getByText('Published posts', { exact: true }).waitFor();
    await capture('admin-dashboard.png');
    await visit('/admin/blogs');
    await capture('blog-management.png');
    await visit('/admin/blogs/create');
    await capture('blog-editor.png');

    const mobile = await browser.newContext({ viewport: { width: 390, height: 844 }, isMobile: true, deviceScaleFactor: 1 });
    const phone = await mobile.newPage();
    for (const url of ['/', '/docs/installation', '/ui-showcase', '/blog', '/login']) {
        const response = await phone.goto(base+url, { waitUntil: 'networkidle' });
        if (response.status() >= 400) throw new Error(`Mobile ${url}: ${response.status()}`);
        const overflow = await phone.evaluate(() => document.documentElement.scrollWidth > window.innerWidth + 1);
        if (overflow) throw new Error(`Horizontal overflow: ${url}`);
    }
    await phone.goto(base+'/', { waitUntil: 'networkidle' });
    await phone.getByRole('button', { name: 'Toggle navigation', exact: true }).click();
    await phone.locator('#mobile-nav').getByRole('link', { name: 'Get started' }).waitFor({ state: 'visible' });
    await phone.screenshot({ path: path.join(root, 'docs/images/screenshots/mobile-navigation.png') });
    await phone.goto(base+'/ui-showcase', { waitUntil: 'networkidle' });
    await phone.getByRole('button', { name: 'Toggle component navigation' }).click();
    await phone.locator('#showcase-navigation').waitFor({ state: 'visible' });
    await phone.goto(base+'/docs/installation', { waitUntil: 'networkidle' });
    await phone.getByRole('button', { name: 'Search documentation', exact: true }).click();
    await phone.getByRole('textbox', { name: 'Search query' }).fill('Package Release');
    await phone.locator('#searchResults').getByRole('link', { name: /Package Release/ }).waitFor();
    await phone.keyboard.press('Escape');
    await phone.getByRole('button', { name: 'Search documentation', exact: true }).waitFor({ state: 'visible' });

    await visit('/');
    await page.getByRole('button', { name: 'Toggle dark theme' }).click();
    if (!(await page.locator('html').getAttribute('class')).includes('dark')) throw new Error('Dark theme did not activate.');
    await capture('homepage-dark.png');
    await page.getByRole('button', { name: 'Toggle dark theme' }).click();
    await capture('homepage.png');
    await visit('/locale/ar');
    if (await page.locator('html').getAttribute('dir') !== 'rtl') throw new Error('Arabic RTL layout did not activate.');
    await visit('/blog');
    await capture('rtl-support.png');
    await visit('/locale/en');
    const index = await (await context.request.get(base+'/llms.txt')).text();
    const docs = [...index.matchAll(/\]\((https?:\/\/[^)]+\/docs\/[^)]+)\)/g)].map(match => match[1]);
    for (const url of docs) {
        const response = await context.request.get(url);
        if (response.status() !== 200) throw new Error(`Documentation ${url}: ${response.status()}`);
    }
    await browser.close();
    if (errors.length) throw new Error(`Browser errors: ${JSON.stringify([...new Set(errors)])}`);
    console.log(`Browser smoke passed: desktop routes, mobile layouts/navigation and ${docs.length} documentation pages. Screenshots saved.`);
})().catch(async error => { console.error(error); await activeBrowser?.close(); process.exitCode = 1; });
