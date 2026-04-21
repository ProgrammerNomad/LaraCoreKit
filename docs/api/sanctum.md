# API Authentication (Sanctum)

**Estimated time:** 8 minutes  
**Difficulty:** Intermediate

---

LaraCoreKit uses **Laravel Sanctum** for API authentication — lightweight, stateless token authentication perfect for mobile apps, SPAs, and third-party integrations.

---

## How Sanctum Works

```
1. Client sends email + password to POST /api/tokens
2. Server validates and returns a plaintext token
3. Client stores the token (localStorage, secure cookie, etc.)
4. Client includes the token in the Authorization header
5. Server validates on protected routes
```

---

## Configuration

Sanctum is pre-configured. Verify in `.env`:

```env
SANCTUM_STATEFUL_DOMAINS=localhost,127.0.0.1,laracorekit.com
```

And in `config/auth.php`, the API guard should use Sanctum:

```php
'guards' => [
    'api' => [
        'driver'   => 'sanctum',
        'provider' => 'users',
    ],
],
```

---

## Issue a Token

```php
// routes/api.php
Route::post('/tokens', function (Request $request) {
    $request->validate([
        'email'       => 'required|email',
        'password'    => 'required',
        'device_name' => 'required|string',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json([
            'message' => 'The provided credentials are incorrect.'
        ], 401);
    }

    return response()->json([
        'token' => $user->createToken($request->device_name)->plainTextToken,
        'user'  => $user->only('id', 'name', 'email'),
    ]);
});
```

**Example request:**

```bash
curl -X POST https://www.laracorekit.com/api/tokens \
  -H "Content-Type: application/json" \
  -d '{"email":"user@laracorekit.com","password":"secret","device_name":"My App"}'
```

**Example response:**

```json
{
    "token": "1|abc123def456...",
    "user": {
        "id": 1,
        "name": "John Doe",
        "email": "john@laracorekit.com"
    }
}
```

---

## Authenticating Requests

```bash
# Include token in Authorization header
curl -H "Authorization: Bearer 1|abc123def456..." \
     -H "Accept: application/json" \
     https://www.laracorekit.com/api/user
```

In JavaScript:

```javascript
const response = await fetch('/api/user', {
    headers: {
        'Authorization': `Bearer ${token}`,
        'Accept': 'application/json',
    }
});
```

---

## Protecting Routes

```php
// routes/api.php
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user',  fn (Request $r) => $r->user());
    Route::get('/posts', [PostApiController::class, 'index']);
    Route::post('/posts', [PostApiController::class, 'store']);
});
```

---

## Token Abilities

Issue tokens with restricted abilities:

```php
$token = $user->createToken('mobile-app', ['posts:read', 'posts:write']);
```

Check abilities in controllers:

```php
if ($request->user()->tokenCan('posts:write')) {
    // Allow write operation
}
```

---

## Revoking Tokens

```php
// Revoke current token (logout)
$request->user()->currentAccessToken()->delete();

// Revoke all tokens (logout from all devices)
$request->user()->tokens()->delete();

// Revoke a specific token
$user->tokens()->where('name', 'mobile-app')->delete();
```

---

## Token Expiry

Set token expiry in `config/sanctum.php`:

```php
'expiration' => 525960, // Minutes (1 year), or null for no expiry
```

---

## Next Steps

**[API Endpoints →](endpoints)**


