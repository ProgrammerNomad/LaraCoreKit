<?php

return [
    'configure_auth' => true,
    // This host demonstrates a custom panel; the package supplies its own in fresh apps.
    'panel' => ['enabled' => false, 'id' => 'admin', 'path' => 'admin'],
    'modules' => ['Auth' => true, 'User' => true, 'Settings' => true, 'Media' => true, 'Blog' => true],
    'showcase' => ['enabled' => false],
    'registration' => true,
    'locales' => ['en', 'hi', 'ar'],
];
