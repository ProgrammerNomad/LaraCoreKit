# Contributing to LaraCoreKit

Thank you for considering contributing to LaraCoreKit! This document outlines the process and guidelines for contributing.

## Table of Contents

- [Code of Conduct](#code-of-conduct)
- [How Can I Contribute?](#how-can-i-contribute)
- [Development Setup](#development-setup)
- [Pull Request Process](#pull-request-process)
- [Coding Standards](#coding-standards)
- [Testing Guidelines](#testing-guidelines)
- [Documentation](#documentation)
- [Module Development](#module-development)

## Code of Conduct

By participating in this project, you agree to maintain a respectful and inclusive environment for all contributors.

### Our Standards

- Be respectful and considerate
- Welcome newcomers and help them learn
- Focus on constructive feedback
- Accept responsibility and apologize when mistakes occur
- Prioritize what is best for the community

## How Can I Contribute?

### Reporting Bugs

Before submitting a bug report:
- Check the existing issues to avoid duplicates
- Use the latest version of LaraCoreKit
- Collect relevant information (Laravel version, PHP version, error messages, stack traces)

When submitting a bug report, include:
- Clear, descriptive title
- Steps to reproduce the issue
- Expected vs actual behavior
- Environment details (OS, PHP version, database)
- Screenshots or code snippets if applicable

### Suggesting Features

Feature suggestions are welcome! Please:
- Check if the feature has already been suggested
- Provide a clear use case and rationale
- Explain how it benefits the community
- Consider whether it belongs in core or as an addon module

### Code Contributions

1. **Fork the repository**
2. **Create a feature branch** (`git checkout -b feature/amazing-feature`)
3. **Make your changes**
4. **Write/update tests**
5. **Run the test suite**
6. **Commit your changes** (`git commit -m 'Add amazing feature'`)
7. **Push to your branch** (`git push origin feature/amazing-feature`)
8. **Open a Pull Request**

## Development Setup

### Prerequisites

- PHP 8.3+
- Composer
- Node.js & NPM
- MySQL, PostgreSQL, or SQLite

### Local Installation

```bash
# Clone your fork
git clone https://github.com/YOUR-USERNAME/LaraCoreKit.git
cd LaraCoreKit

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Setup database
touch database/database.sqlite
php artisan migrate --seed
php artisan storage:link

# Create admin user
php artisan filament:user

# Start development servers
npm run dev
php artisan serve
```

### Development Commands

```bash
# Run tests
composer test

# Run code style fixer
composer pint

# Run static analysis
vendor/bin/phpstan analyse

# Run all quality checks
composer review

# Build assets
npm run build
```

## Pull Request Process

### Before Submitting

1. **Update documentation** if needed
2. **Add/update tests** for your changes
3. **Run the full test suite** and ensure it passes
4. **Run code style checks** with Pint
5. **Run static analysis** with PHPStan
6. **Update CHANGELOG.md** under `[Unreleased]` section

### PR Title Format

Use conventional commits format:

- `feat: Add new feature`
- `fix: Fix bug in module`
- `docs: Update documentation`
- `style: Format code`
- `refactor: Refactor module structure`
- `test: Add missing tests`
- `chore: Update dependencies`

### PR Description Template

```markdown
## Description
Brief description of changes

## Type of Change
- [ ] Bug fix
- [ ] New feature
- [ ] Breaking change
- [ ] Documentation update

## Testing
How has this been tested?

## Checklist
- [ ] Tests pass locally
- [ ] Code follows style guidelines
- [ ] Documentation updated
- [ ] CHANGELOG.md updated
```

### Review Process

- Maintainers will review your PR within 7 days
- Address feedback and update your PR
- Once approved, a maintainer will merge your PR
- Your contribution will be included in the next release

## Coding Standards

### PHP Standards

- Follow PSR-12 coding style
- Use strict types (`declare(strict_types=1)`)
- Add type hints for all parameters and return types
- Write descriptive variable and method names
- Keep methods focused and single-purpose

### Laravel Best Practices

- Follow Laravel naming conventions
- Use Eloquent ORM for database operations
- Use form requests for validation
- Use policies for authorization
- Use events and listeners for decoupled logic
- Use queues for long-running tasks

### Code Style

We use Laravel Pint for code formatting:

```bash
composer pint
```

To check without fixing:

```bash
composer pint --test
```

## Testing Guidelines

### Writing Tests

- Write tests for all new features
- Update tests when modifying existing features
- Aim for high code coverage
- Test edge cases and error conditions

### Test Structure

```php
public function test_user_can_create_blog_post(): void
{
    // Arrange
    $user = User::factory()->create();
    
    // Act
    $response = $this->actingAs($user)->post('/blog/posts', [
        'title' => 'Test Post',
        'content' => 'Test content',
    ]);
    
    // Assert
    $response->assertStatus(201);
    $this->assertDatabaseHas('blogs', ['title' => 'Test Post']);
}
```

### Running Tests

```bash
# Run all tests
php artisan test

# Run specific test file
php artisan test tests/Feature/BlogTest.php

# Run with coverage
php artisan test --coverage

# Run specific test method
php artisan test --filter=test_user_can_create_blog_post
```

## Documentation

### Where to Document

- **Code comments** - Complex logic and business rules
- **PHPDoc blocks** - All classes and public methods
- **README.md** - Installation and quick start
- **docs/** - Comprehensive feature documentation
- **CHANGELOG.md** - All changes

### Documentation Style

- Write clear, concise explanations
- Include code examples
- Add screenshots for UI features
- Link to related documentation
- Keep documentation up to date

## Module Development

### Module Structure

Each module should follow this structure:

```
modules/YourModule/
├── src/
│   ├── YourModuleServiceProvider.php
│   ├── Http/
│   ├── Models/
│   ├── Policies/
│   └── Filament/
├── database/
│   ├── migrations/
│   └── seeders/
├── routes/
│   └── web.php
├── views/
├── lang/
├── config/
├── tests/
├── README.md
└── CHANGELOG.md
```

### Module Requirements

- Follow the core module contract
- Include migrations, routes, and seeders
- Provide Filament resources for admin
- Include translations for all languages
- Write comprehensive tests
- Document all features
- Specify version compatibility

### Module Compatibility

Specify supported versions in your module's `composer.json`:

```json
{
    "require": {
        "php": "^8.3",
        "laravel/framework": "^13.0",
        "filament/filament": "^5.0",
        "livewire/livewire": "^4.0"
    }
}
```

## Branch Naming

- `feature/feature-name` - New features
- `fix/bug-name` - Bug fixes
- `docs/doc-update` - Documentation
- `refactor/refactor-name` - Code refactoring
- `test/test-name` - Test additions

## Commit Messages

Write clear commit messages:

```
feat: Add blog post scheduling feature

- Add scheduled_at column to blogs table
- Create scheduler command for publishing
- Add admin UI for scheduling
- Write tests for scheduling logic
```

## License

By contributing to LaraCoreKit, you agree that your contributions will be licensed under the MIT License.

## Questions?

- Open a [GitHub Discussion](https://github.com/ProgrammerNomad/LaraCoreKit/discussions)
- Check the [FAQ](docs/faq.md)
- Read the docs: https://www.laracorekit.com/docs

---

**Thank you for contributing to LaraCoreKit!**
