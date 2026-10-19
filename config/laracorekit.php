<?php

return [
    // The initial release targets new Laravel applications using the kit's User model.
    'configure_auth' => true,
    'panel' => [
        'enabled' => true,
        'id' => 'admin',
        'path' => 'admin',
    ],
    'modules' => [
        'Auth' => true,
        'User' => true,
        'Settings' => true,
        'Media' => true,
        'Blog' => true,
    ],
    'showcase' => ['enabled' => true],
    'registration' => false,
    'locales' => ['en', 'hi', 'ar'],
];
