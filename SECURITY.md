# Security Policy

## Supported Versions

We release patches for security vulnerabilities in the following versions:

| Version | Supported          |
| ------- | ------------------ |
| 0.0.2   | :white_check_mark: |
| 0.0.1   | :x:                |

## Reporting a Vulnerability

We take security seriously at LaraCoreKit. If you discover a security vulnerability, please follow these steps:

### Where to Report

**DO NOT** create a public GitHub issue for security vulnerabilities.

Instead, please use one of these methods:

**Option 1: GitHub Security Advisories (Recommended)**
- Go to https://github.com/ProgrammerNomad/LaraCoreKit/security/advisories/new
- This creates a private security advisory

**Option 2: Private Email**
- **Email:** Contact the repository owner directly through GitHub
- **Subject:** [SECURITY] Brief description of the issue

### What to Include

Please provide the following information:

1. **Description** - Clear description of the vulnerability
2. **Steps to Reproduce** - Detailed steps to reproduce the issue
3. **Impact** - Potential impact and severity assessment
4. **Affected Versions** - Which versions of LaraCoreKit are affected
5. **Suggested Fix** - If you have a fix or mitigation suggestion
6. **Disclosure Timeline** - Your preferred disclosure timeline

### Response Timeline

- **Initial Response:** Within 48 hours
- **Status Update:** Within 7 days
- **Fix Timeline:** Depends on severity
  - Critical: 1-7 days
  - High: 7-14 days
  - Medium: 14-30 days
  - Low: 30-60 days

### Disclosure Policy

We follow responsible disclosure practices:

1. We will acknowledge your email within 48 hours
2. We will provide a detailed response within 7 days
3. We will work with you to understand and validate the issue
4. We will develop and test a fix
5. We will release a security patch
6. We will credit you in the release notes (unless you prefer to remain anonymous)

### Security Updates

Security updates will be:
- Released as patch versions
- Documented in CHANGELOG.md
- Announced on GitHub Releases
- Tagged with `security` label

### Security Best Practices

When using LaraCoreKit:

1. **Keep Updated** - Always use the latest supported version
2. **Environment Files** - Never commit `.env` files to version control
3. **Credentials** - Use strong passwords and rotate API keys regularly
4. **Database** - Run migrations and seeders only in trusted environments
5. **File Permissions** - Ensure proper file and directory permissions
6. **Dependencies** - Keep all Composer and NPM dependencies updated
7. **HTTPS** - Always use HTTPS in production
8. **Demo Mode** - Never use demo credentials in production

### Scope

This security policy applies to:
- LaraCoreKit core framework
- Official modules (Auth, Blog, Core, Media, Settings, User)
- Official documentation
- Official demo site

This policy does NOT apply to:
- Third-party modules
- Custom implementations
- Modified versions
- Development/staging environments

## Hall of Fame

We thank the following researchers for responsibly disclosing security issues:

(No reports yet)

---

**Last Updated:** April 22, 2026
