# Multilingual content

English, Hindi and Arabic are the default locale choices. Core supplies language switching and locale middleware, while package JSON translations provide interface text. Blog/settings fields can store language-keyed JSON values.

The session locale is checked against configured supported locales before application locale is changed. The locale switch returns to the application's root. Content views generally fall back to English when a field translation is missing.

Adding a language requires configuring its locale, labels, JSON translations and any content/form fields your application needs. The demo marketing copy may fall back to English; supported locale selection does not imply every site paragraph is translated.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
