# Documentation Page Metadata Template

This template shows how to add metadata headers to all documentation pages.

## Standard Metadata Format

Add this metadata block at the top of every documentation page (after the title):

```markdown
# Page Title

---
**Supported Stack:** Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4  
**Module Status:** Core | Addon | Planned  
**Last Updated:** YYYY-MM-DD  
**Source Files:** [ClassName](../../path/to/file.php) | [Routes](../../path/to/routes.php)
---

## Page Content Starts Here
```

## Field Descriptions

### Supported Stack
Shows which versions the documentation applies to. Update this when requirements change.

**Format:** `Laravel X / Filament X / Livewire X / Tailwind X`

**Example:** `Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4`

### Module Status
Indicates whether the feature ships today, is available as addon, or is planned.

**Options:**
- `Core` - Included in base LaraCoreKit
- `Addon` - Available as separate package
- `Planned` - On roadmap, not yet available

**Example:** `Core` or `Addon` or `Planned`

### Last Updated
Date when the documentation page was last reviewed and updated.

**Format:** `Month DD, YYYY` or `YYYY-MM-DD`

**Example:** `April 22, 2026` or `2026-04-22`

### Source Files
Links to actual source code files referenced in the documentation.

**Format:** `[DisplayName](relative/path/to/file.php)`

**Example:** 
```markdown
**Source Files:** [BlogResource](../../modules/Blog/src/Filament/Resources/BlogResource.php) | [Routes](../../modules/Blog/routes/web.php) | [Model](../../modules/Blog/src/Models/Post.php)
```

**Optional field** - Omit if no specific source files to reference.

---

## Examples by Page Type

### Example 1: Core Module Documentation

```markdown
# Blog Module

---
**Supported Stack:** Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4  
**Module Status:** Core  
**Last Updated:** April 22, 2026  
**Source Files:** [BlogResource](../../modules/Blog/src/Filament/Resources/BlogResource.php) | [Routes](../../modules/Blog/routes/web.php) | [BlogSeeder](../../modules/Blog/database/seeders/BlogSeeder.php)
---

The Blog module provides a complete multilingual blog system...
```

### Example 2: Planned Feature Documentation

```markdown
# Teams Module

---
**Supported Stack:** Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4  
**Module Status:** Planned  
**Last Updated:** April 22, 2026  
---

The Teams module will provide multi-tenancy support (coming in v0.3.0)...
```

### Example 3: Addon Module Documentation

```markdown
# E-commerce Module

---
**Supported Stack:** Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4  
**Module Status:** Addon  
**Last Updated:** April 22, 2026  
**Package:** [programmernomad/laracorekit-ecommerce](https://github.com/ProgrammerNomad/laracorekit-ecommerce)
---

The E-commerce module is available as a separate addon package...
```

### Example 4: Feature Documentation (No Source Files)

```markdown
# Multilingual Support

---
**Supported Stack:** Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4  
**Module Status:** Core  
**Last Updated:** April 22, 2026  
---

LaraCoreKit provides built-in multilingual support for three languages...
```

### Example 5: Configuration Documentation

```markdown
# Configuration

---
**Supported Stack:** Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4  
**Last Updated:** April 22, 2026  
**Source Files:** [modules.php](../../config/modules.php) | [app.php](../../config/app.php)
---

Learn how to configure LaraCoreKit for your project...
```

---

## Pages to Update

### Priority 1: Getting Started Pages
- [ ] introduction.md (DONE)
- [ ] quick-start.md
- [ ] installation.md
- [ ] project-structure.md
- [ ] configuration.md

### Priority 2: Core System Pages
- [ ] core/architecture.md
- [ ] core/modules-system.md
- [ ] core/service-providers.md
- [ ] core/routing.md
- [ ] core/middleware.md
- [ ] core/helper-functions.md
- [ ] core/permissions-roles.md

### Priority 3: Frontend Pages
- [ ] frontend/layouts.md
- [ ] frontend/blade-components.md
- [ ] frontend/livewire-components.md
- [ ] frontend/styling-tailwind.md
- [ ] frontend/auth-pages.md
- [ ] frontend/blog-pages.md

### Priority 4: Admin Pages
- [ ] admin/filament-overview.md
- [ ] admin/resources.md
- [ ] admin/custom-pages.md
- [ ] admin/widgets.md
- [ ] admin/forms-tables.md

### Priority 5: Module Pages
- [ ] modules/blog-module.md
- [ ] modules/user-module.md
- [ ] modules/settings-module.md
- [ ] modules/media-module.md

### Priority 6: Features Pages
- [ ] features/multilingual.md
- [ ] features/rtl-support.md
- [ ] features/api-auth.md
- [ ] features/file-uploads.md
- [ ] features/seo-meta.md
- [ ] features/activity-logs.md

### Priority 7: Development Pages
- [ ] development/artisan-commands.md
- [ ] development/debugging.md
- [ ] development/testing.md
- [ ] deployment/production.md
- [ ] deployment/optimization.md
- [ ] deployment/security.md

### Priority 8: Contributing Pages
- [ ] contributing/report-bugs.md
- [ ] contributing/contribute-code.md
- [ ] contributing/module-development.md

### Priority 9: Advanced Pages
- [ ] advanced/custom-modules.md
- [ ] advanced/extending-filament.md
- [ ] advanced/performance.md
- [ ] advanced/scaling.md

---

## Automation Script

You can use this bash script to add metadata to all markdown files:

```bash
#!/bin/bash

# Add metadata to all docs
for file in docs/**/*.md; do
  if ! grep -q "Supported Stack:" "$file"; then
    # Create temp file with metadata
    {
      head -n 1 "$file"
      echo ""
      echo "---"
      echo "**Supported Stack:** Laravel 13 / Filament 5 / Livewire 4 / Tailwind 4  "
      echo "**Last Updated:** $(date +%Y-%m-%d)  "
      echo "---"
      echo ""
      tail -n +2 "$file"
    } > "$file.tmp"
    
    # Replace original
    mv "$file.tmp" "$file"
    echo "Updated: $file"
  fi
done
```

**Warning:** Review each file manually to add correct Module Status and Source Files.

---

## Benefits of Metadata

### For Users:
- Know which version docs apply to
- See when docs were last updated
- Find source code quickly
- Understand feature status

### For Maintainers:
- Track outdated documentation
- Identify version-specific changes
- Link docs to code easily
- Show development status

### For SEO:
- Structured information for search engines
- Last updated date for freshness signals
- Clear version targeting
- Better answer engine compatibility

---

## Maintenance

Update metadata when:
- Bumping major version (Laravel 14, Filament 6, etc.)
- Changing page content
- Moving from Planned to Core/Addon
- Refactoring source files

Review all page metadata quarterly to ensure accuracy.

---

## Notes

- Use consistent formatting (exact spacing and separators)
- Keep metadata concise (one line per field)
- Update Last Updated date when reviewing, even if no content changes
- Source Files is optional but highly valuable
- Module Status helps users understand what's available NOW

---

**Last Updated:** April 22, 2026
