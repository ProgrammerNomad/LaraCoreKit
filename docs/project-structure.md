# Architecture and editable modules

```text
LaraCoreKit/
  app/                          application providers and Filament panel
  modules/
    Core/                       shared layout, locale and Foundation services
    Auth/                       login, recovery and account dashboard
    User/                       users, roles, permissions and seeders
    Blog/                       public blog and administration
    Settings/                   application settings
    Media/                      media integration
    UIShowcase/                 editable interface examples
  resources/views/home.blade.php
  resources/views/vendor/core/  application-owned shared layout
  resources/css/                editable styles
  routes/                       application routes
  config/laracorekit.php         module configuration
  database/                     application migrations and safe seeders
  vendor/                       third-party dependencies only
```

All LaraCoreKit source belongs to the application. Composer autoloads module namespaces from these local directories. The foundation provider is registered in bootstrap/providers.php and registers configured modules. The application Filament panel is registered separately. No self-dependency or path repository is used.

Core loads shared views and locale handling. Auth requires User, Blog requires User and Media. Keep dependencies enabled or adapt the application resources when removing features. The root homepage is an ordinary application view route. The website/documentation viewer and demo reset code live in ProgrammerNomad/laracorekit-website.

Edit source directly and use Git to track your changes. Composer dependency updates do not overwrite application modules. Review upstream changes and merge fixes deliberately.
