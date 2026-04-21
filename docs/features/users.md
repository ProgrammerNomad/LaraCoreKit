# Users & Profiles

**Estimated time:** 6 minutes  
**Difficulty:** Beginner

---

The User module manages user profiles, avatars, and extended user data beyond the core `users` table.

---

## User Model

The User model lives in `modules/User/src/Models/User.php` and extends Laravel's base Authenticatable.

## Profile Fields

| Field | Type | Description |
|-------|------|-------------|
| `name` | string | Display name |
| `email` | string | Unique email address |
| `avatar` | string (nullable) | Profile picture path |
| `bio` | text (nullable) | Short user biography |
| `locale` | string | Preferred language |

---

## Working with Users

```php
use Modules\User\Models\User;

// Get all users
$users = User::all();

// Find by email
$user = User::where('email', 'john@laracorekit.com')->first();

// Update profile
$user->update(['name' => 'John Doe', 'bio' => 'Laravel developer']);
```

---

## Roles

Roles are managed via Spatie Laravel Permission. Users can have multiple roles.

```php
// Assign a role
$user->assignRole('editor');

// Check role
$user->hasRole('admin');

// Get all roles
$user->roles;
```

---

## Avatars

Profile pictures are stored via Spatie MediaLibrary:

```php
// Upload avatar
$user->addMediaFromRequest('avatar')->toMediaCollection('avatars');

// Get avatar URL
$avatarUrl = $user->getFirstMediaUrl('avatars');
```

In Blade:
```blade
<img src="{{ $user->getFirstMediaUrl('avatars') ?: '/images/default-avatar.png' }}" alt="{{ $user->name }}">
```

---

## Admin Management

Users are managed at `/admin/users` in the Filament admin panel:
- View all registered users
- Assign/revoke roles
- Reset passwords
- View activity

---

## Next Steps

**[Roles & Permissions →](roles-permissions)**

