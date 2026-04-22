# Screenshot and Media Guide for LaraCoreKit

This guide explains exactly which screenshots and GIF animations you need to create and where to place them.

## Directory Structure

Create this directory structure for all images:

```
docs/
  images/
    screenshots/
      admin-dashboard.png
      blog-editor.png
      ui-showcase.png
      rtl-support.png
      create-blog-post.gif
      language-switching.gif
```

## Required Screenshots

### 1. Admin Dashboard (admin-dashboard.png)

**What to capture:**
- Navigate to: http://localhost:8000/admin or https://www.laracorekit.com/admin
- Login as admin user
- Capture the main dashboard view showing:
  - Filament admin navigation sidebar
  - Dashboard widgets (if any)
  - Dark mode toggle visible
  - User menu in top-right
  - At least 2-3 resources visible in sidebar (Users, Blog Posts, etc.)

**Technical requirements:**
- Resolution: 1920x1080 or higher
- Format: PNG
- Show full browser window or crop to just the admin panel area
- Include visible data (users, blog posts, etc.) from seeded data
- Optional: Take both light and dark mode versions

**Recommended tool:**
- Windows: Snipping Tool (Win + Shift + S)
- Browser: Full page screenshot extension
- Professional: ShareX, Greenshot

---

### 2. Blog Editor (blog-editor.png)

**What to capture:**
- Navigate to: http://localhost:8000/admin/blog-posts/create or edit an existing post
- Show the Filament form for creating/editing a blog post with:
  - Rich text editor visible with content
  - SEO fields section visible (slug, meta description)
  - Language selector showing multilingual support
  - Status selector (Draft/Published)
  - Featured image upload area
  - Save/Cancel buttons

**Technical requirements:**
- Resolution: 1920x1080 or higher
- Format: PNG
- Capture the full form or most important sections
- Show actual content in the editor, not empty fields
- Make sure multilingual tabs/selector is visible

**Example content to show:**
Use one of the seeded blog posts or create a new one titled "Getting Started with LaraCoreKit"

---

### 3. UI Component Showcase (ui-showcase.png)

**What to capture:**
- Navigate to: http://localhost:8000/ui-showcase or https://www.laracorekit.com/ui-showcase
- Capture a view showing:
  - Multiple component categories visible
  - At least 6-8 different components rendered
  - Variety of components (buttons, forms, cards, tables, etc.)
  - Clean, organized layout
  - Navigation showing component categories

**Technical requirements:**
- Resolution: 1920x1080 or higher
- Format: PNG
- Capture a scrolled view showing component variety
- Ensure text is readable
- Show colorful, visually appealing components

**Alternative:**
Create a collage showing 4-6 individual component categories in a grid layout

---

### 4. RTL Support (rtl-support.png)

**What to capture:**
- Navigate to homepage or blog page
- Switch language to Arabic using language switcher
- Capture a page showing:
  - Right-to-left text direction
  - Navigation aligned to right
  - Content properly flowing RTL
  - Arabic text visible and readable
  - UI elements mirrored correctly

**Technical requirements:**
- Resolution: 1920x1080 or higher
- Format: PNG
- Show clear before/after or side-by-side comparison if possible
- Ensure Arabic text is properly displayed
- Show both navigation and content areas

**Recommended approach:**
Take two screenshots (LTR English and RTL Arabic) and combine them side-by-side using image editor, OR take a single screenshot showing the RTL layout prominently

---

## Required GIF Animations

### 5. Creating a Blog Post (create-blog-post.gif)

**What to record:**
A short workflow showing:
1. Navigate to admin panel
2. Click "Blog Posts" in sidebar
3. Click "Create" button
4. Fill in title field (type: "My First Blog Post")
5. Add some content to the rich text editor
6. Select "Published" status
7. Click "Save" button
8. Show success notification
9. See the new post in the list

**Technical requirements:**
- Duration: 15-30 seconds
- Resolution: 1920x1080 or 1280x720
- Format: GIF (optimized, max 5MB) or MP4
- Frame rate: 10-15 fps for GIF, 30 fps for MP4
- Show cursor movements clearly
- Smooth transitions

**Recommended tools:**
- Windows: ScreenToGif (free, excellent)
- Cross-platform: OBS Studio + GIF converter
- Online: Recordit, Gifox
- Browser extension: Chrome Capture, Loom

**Tips:**
- Record at normal speed, then speed up 1.5x
- Pause briefly on important steps
- Crop to focus on relevant area
- Optimize GIF size (use fewer colors, lower fps if needed)

---

### 6. Language Switching (language-switching.gif)

**What to record:**
A short workflow showing:
1. Start on homepage in English
2. Show language switcher in navigation
3. Click language dropdown
4. Select "Arabic" or "Hindi"
5. Show page content changing language
6. Show RTL layout shift (if switching to Arabic)
7. Navigate to one more page (like Blog or About)
8. Show consistent language across site

**Technical requirements:**
- Duration: 10-20 seconds
- Resolution: 1920x1080 or 1280x720
- Format: GIF (optimized, max 5MB) or MP4
- Frame rate: 10-15 fps for GIF
- Show smooth transition
- Visible UI changes

**Tips:**
- Show clear before/after state
- Highlight the language switcher
- Show multiple pages if possible (homepage + blog)
- For Arabic, emphasize the RTL layout change

---

## File Placement

After creating all screenshots and GIFs:

1. Create the directory structure:
```bash
mkdir -p docs/images/screenshots
```

2. Place files with exact names:
```
docs/images/screenshots/admin-dashboard.png
docs/images/screenshots/blog-editor.png
docs/images/screenshots/ui-showcase.png
docs/images/screenshots/rtl-support.png
docs/images/screenshots/create-blog-post.gif
docs/images/screenshots/language-switching.gif
```

3. Verify files:
   - All files exist
   - File names match exactly (lowercase, hyphens, correct extensions)
   - PNG files are not too large (compress if over 1MB each)
   - GIF files are optimized (max 5MB each, preferably under 3MB)

## Image Optimization

### PNG Optimization
Use one of these tools to compress PNG files without losing quality:
- **TinyPNG** - https://tinypng.com (online, drag and drop)
- **ImageOptim** - https://imageoptim.com (Mac)
- **PNGGauntlet** - https://pnggauntlet.com (Windows)
- **squoosh.app** - https://squoosh.app (online, advanced)

Target: Keep each PNG under 500KB if possible, max 1MB

### GIF Optimization
Use these tools to reduce GIF file size:
- **ScreenToGif** - Has built-in optimizer (Windows)
- **ezgif.com** - https://ezgif.com/optimize (online)
- **gifsicle** - Command line tool for advanced optimization
- Convert to MP4 if GIF is too large, then use video tag in docs

Target: Keep each GIF under 3MB, ideally under 2MB

**GIF optimization tips:**
- Reduce colors to 64-128 instead of 256
- Lower frame rate to 10-12 fps
- Resize to 1280x720 or 1024x768 if needed
- Crop to focus area only
- Remove unnecessary frames

## Alternative: Video Format

If GIF files are too large even after optimization, you can use MP4 format instead:

1. Record as MP4 using OBS Studio or similar
2. Place in same directory with .mp4 extension
3. Update README.md to use HTML5 video tag:

```html
<video width="100%" autoplay loop muted playsinline>
  <source src="docs/images/screenshots/create-blog-post.mp4" type="video/mp4">
</video>
```

MP4 files are usually 10-20x smaller than GIFs for the same quality.

## Checklist

Before committing, verify:

- [ ] All 6 files created and placed in correct directory
- [ ] File names match exactly (lowercase, hyphens, correct extensions)
- [ ] PNG files are clear and readable (1920x1080 or higher)
- [ ] PNG files are optimized (under 1MB each)
- [ ] GIF files show smooth animations (15-30 seconds)
- [ ] GIF files are optimized (under 3MB each)
- [ ] All screenshots show seeded demo data, not empty screens
- [ ] RTL screenshot clearly shows right-to-left layout
- [ ] Images look professional (no personal info, clean browser, etc.)
- [ ] Test that images display correctly in README.md

## After Adding Images

Once all images are added:

1. Commit the images:
```bash
git add docs/images/screenshots/
git commit -m "Add product screenshots and demo GIFs"
```

2. Push to GitHub:
```bash
git push origin main
```

3. Verify images display on GitHub README
4. Update website homepage with same images
5. Consider adding to docs pages as well

## Additional Screenshots (Optional)

Consider adding these for documentation and marketing:

- **Login page** - show auth UI (login-page.png)
- **User profile** - show profile editing (user-profile.png)
- **Settings page** - show admin settings (settings-page.png)
- **Media library** - show file management (media-library.png)
- **Mobile view** - show responsive design (mobile-view.png)
- **Dark mode** - show dark mode UI (dark-mode.png)

Place these in docs/images/additional/ directory.

---

**Questions or need help?**

If you encounter issues capturing screenshots or creating GIFs, you can:
1. Use the live demo site at https://www.laracorekit.com
2. Seed your local database with demo data: `php artisan db:seed`
3. Ask for help: https://github.com/ProgrammerNomad/LaraCoreKit/discussions
