<?php

return [
    'modules' => [
        'Core' => [
            'enabled' => true,
            'namespace' => 'Modules\Core',
            'provider' => 'Modules\Core\CoreServiceProvider',
        ],
        'Auth' => [
            'enabled' => true,
            'namespace' => 'Modules\Auth',
            'provider' => 'Modules\Auth\AuthServiceProvider',
        ],
        'User' => [
            'enabled' => true,
            'namespace' => 'Modules\User',
            'provider' => 'Modules\User\UserServiceProvider',
        ],
        'Blog' => [
            'enabled' => true,
            'namespace' => 'Modules\Blog',
            'provider' => 'Modules\Blog\BlogServiceProvider',
        ],
        'Settings' => [
            'enabled' => true,
            'namespace' => 'Modules\Settings',
            'provider' => 'Modules\Settings\SettingsServiceProvider',
        ],
        'Media' => [
            'enabled' => true,
            'namespace' => 'Modules\Media',
            'provider' => 'Modules\Media\MediaServiceProvider',
        ],
    ],
];
