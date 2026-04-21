# Roles & Permissions

**Estimated time:** 8 minutes  
**Difficulty:** Intermediate

---

LaraCoreKit uses **Spatie Laravel Permission** for role-based access control (RBAC), pre-configured and seeded with sensible defaults.

---

## Default Roles

| Role | Description |
|------|-------------|
| `super-admin` | Full access to everything |
| `admin` | Access to admin panel |
| `editor` | Can manage blog content |
| `user` | Standard registered user |

---

## Default Permissions

| Permission | Description |
|-----------|-------------|
| `view users` | List all users |
| `edit users` | Update user profiles |
| `delete users` | Remove users |
| `manage posts` | Full blog post access |
| `manage settings` | Change site configuration |

---

## Assigning Roles

```php
// Assign a single role
$user->assignRole('editor');

// Assign multiple roles
$user->assignRole('editor', 'user');

// Sync roles (removes old ones)
$user->syncRoles(['editor', 'user']);

// Remove a role
$user->removeRole('editor');
```

---

## Checking Roles & Permissions

```php
// Check role
$user->hasRole('admin');
$user->hasAnyRole(['admin', 'super-admin']);
$user->hasAllRoles(['admin', 'editor']);

// Check permission
$user->can('edit posts');
$user->hasPermissionTo('delete users');

// Via Gate facade
Gate::allows('manage posts');
```

---

## In Blade Templates

```blade
@role('admin')
    <a href="/admin">Admin Panel</a>
@endrole

@can('edit posts')
    <a href="/posts/edit">Edit Post</a>
@endcan

@hasanyrole('admin|editor')
    {{-- Admin or editor content --}}
@endhasanyrole
```

---

## In Middleware

```php
// In routes
Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin', AdminDashboard::class);
});

Route::middleware(['permission:manage posts'])->group(function () {
    Route::get('/posts/create', CreatePost::class);
});
```

---

## Creating Custom Roles

Via Seeder:

```php
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

// Create role
$role = Role::create(['name' => 'moderator']);

// Create permission
$permission = Permission::create(['name' => 'moderate comments']);

// Assign permission to role
$role->givePermissionTo('moderate comments');
```

---

## Admin Panel

Manage roles and permissions from the Filament admin:
- `/admin/roles` — Create, edit, delete roles
- `/admin/users` — Assign roles to users

---

## Next Steps

� **[Blog System →](blog)**
