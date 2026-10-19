# Module system

Application-owned modules live in `modules`. Configure their providers through `config/laracorekit.php`, under `modules`. Core always loads. Auth requires User; Blog requires User and Media; the packaged panel requires User. Invalid combinations fail explicitly.

Providers own routes, namespaced views and migrations. The packaged panel registers resources only for enabled modules. Disabling a module does not delete data or remove Composer dependencies. The website's Docs and UIShowcase modules are host-only providers.

For additional independently distributed modules, follow the existing demo module's Composer service-provider discovery pattern. Do not edit the installed package to add application features.
