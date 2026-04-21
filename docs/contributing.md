# Contributing to LaraCoreKit

**Estimated time:** 5 minutes  
**Difficulty:** Beginner

---

Thank you for your interest in contributing to LaraCoreKit! Contributions make the open-source community amazing.

---

## Ways to Contribute

| Contribution | How |
|-------------|-----|
| Report bugs | [GitHub Issues](https://github.com/ProgrammerNomad/LaraCoreKit/issues) |
|  Suggest features | GitHub Discussions |
| Improve docs | Edit docs and submit a PR |
|  Build modules | Share on GitHub / Packagist |
| Add translations | Create/improve language files |
|  Star the repo | Helps others discover it |

---

## Contributing Code

### Step 1: Fork and Clone

```bash
# Fork on GitHub first, then:
git clone https://github.com/YOUR_USERNAME/LaraCoreKit.git
cd LaraCoreKit
```

### Step 2: Set Up Locally

```bash
cp .env.example .env
composer install
npm install
php artisan key:generate
php artisan migrate --seed
npm run dev
```

### Step 3: Create a Branch

```bash
git checkout -b feature/your-feature-name
# or
git checkout -b fix/bug-description
```

**Branch naming:**
- `feature/` — New feature
- `fix/` — Bug fix
- `docs/` — Documentation improvement
- `refactor/` — Code refactoring

### Step 4: Make Your Changes

- Follow PSR-12 coding standards
- Write tests for new features
- Keep commits small and focused
- Write clear commit messages

### Step 5: Test Your Changes

```bash
# Format code
./vendor/bin/pint

# Run all tests
php artisan test

# Run type checking (if using PHPStan)
./vendor/bin/phpstan analyse
```

### Step 6: Submit a Pull Request

```bash
git push origin feature/your-feature-name
```

Then open a PR on GitHub with:
- **Clear title** describing what it does
- **Description** of what changed and why
- **Screenshots** for UI changes
- **Reference** to related issues

---

## Code Style

LaraCoreKit uses **Laravel Pint** (PSR-12 based):

```bash
# Auto-format all PHP files
./vendor/bin/pint

# Check without fixing
./vendor/bin/pint --test
```

---

## Documentation

Docs files are in `/docs/*.md`. Edit them directly and submit a PR.

Guidelines:
- Start each page with a clear **H1 heading**
- Include `**Estimated time:**` and `**Difficulty:**`
- Use real, working code examples
- End with a **"Next Steps"** section
- Avoid vague descriptions — be specific

---

## Bug Reports

A great bug report includes:
- **LaraCoreKit version** (`git log --oneline -1`)
- **PHP version** (`php -v`)
- **Steps to reproduce** (exact steps, no assumptions)
- **Expected behavior**
- **Actual behavior**
- **Error messages / stack trace**

---

## Feature Requests

Open a GitHub Discussion with:
- **What problem does this solve?**
- **Who would use this feature?**
- **How should it work?** (API, UI, behavior)
- **Alternative solutions you considered**

---

## Module Contributions

Built an awesome module? Share it!

1. Create a Composer package (see [Publishing Modules](modules/publishing.md))
2. Post in GitHub Discussions with `[Module]` prefix
3. We may feature it in the official docs!

---

## Code of Conduct

Be respectful, inclusive, and constructive. We follow the [Contributor Covenant](https://www.contributor-covenant.org/) Code of Conduct.

---

## License

By contributing, you agree that your contributions will be licensed under the **MIT License**.

---

**Thank you for helping make LaraCoreKit better! **
