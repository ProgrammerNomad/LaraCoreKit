<?php

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Str;
use Modules\Blog\Models\Blog;
use Modules\User\Database\Seeders\RolePermissionSeeder;
use Modules\User\Models\User;

// Disposable screenshot fixture. Never runs against the normal application database.
require __DIR__.'/../vendor/autoload.php';
$app = require __DIR__.'/../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();
$database = config('database.connections.sqlite.database');
if (! app()->environment('testing') || config('database.default') !== 'sqlite'
    || basename($database) !== 'laracorekit-preview.sqlite') {
    throw new RuntimeException('Preview fixtures require the isolated testing SQLite database.');
}
(new RolePermissionSeeder)->run();
$user = User::firstOrCreate(['email' => 'preview@example.test'], [
    'name' => 'Demo Maintainer', 'password' => 'preview-only-local-password',
]);
$user->assignRole('Admin');
foreach ([
    ['Building with modules', 'Organize application features around clear provider, route, migration and view boundaries.'],
    ['A public site and an admin workspace', 'Connect content authoring in Filament with a public Livewire experience.'],
    ['Make the starter your own', 'Keep custom application logic and view overrides outside vendor so package updates remain manageable.'],
] as $i => [$title, $content]) {
    Blog::firstOrCreate(['slug' => Str::slug($title)], [
        'author_id' => $user->id, 'title' => ['en' => $title],
        'excerpt' => ['en' => $content], 'content' => ['en' => '<p>'.$content.'</p>'],
        'category' => ['en' => 'Engineering'], 'status' => 'published',
        'published_at' => now()->subDays($i + 1),
    ]);
}
echo "Disposable preview content prepared.\n";
