# API Authentication Flow

**Estimated time:** 6 minutes  
**Difficulty:** Intermediate

---

This page explains the full token lifecycle for API authentication in LaraCoreKit.

---

## Token Lifecycle

```
┌──────────────────────────────────────────────────────────┐
│  1. Client POSTs credentials to POST /api/tokens          │
│  2. Server validates email + password                      │
│  3. Server creates and returns plaintext token             │
│  4. Client stores token securely                          │
│  5. Client sends token in Authorization header            │
│  6. Server validates token on each protected request      │
│  7. Client calls DELETE /api/tokens/current to logout     │
└──────────────────────────────────────────────────────────┘
```

---

## Required Headers

```bash
# For authenticated requests
Authorization: Bearer {your-token}
Accept: application/json
Content-Type: application/json
```

---

## Step-by-Step Example

### 1. Login and Get Token

```javascript
const response = await fetch('/api/tokens', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
    body: JSON.stringify({
        email:       'user@example.com',
        password:    'secret',
        device_name: 'My Mobile App',
    }),
});

const { token, user } = await response.json();

// Store token securely
localStorage.setItem('token', token);
```

### 2. Make Authenticated Requests

```javascript
const token = localStorage.getItem('token');

const response = await fetch('/api/user', {
    headers: {
        'Authorization': `Bearer ${token}`,
        'Accept':        'application/json',
    },
});

const { data } = await response.json();
```

### 3. Logout

```javascript
await fetch('/api/tokens/current', {
    method:  'DELETE',
    headers: { 'Authorization': `Bearer ${token}` },
});

localStorage.removeItem('token');
```

---

## Token Abilities (Scoped Tokens)

Issue tokens with restricted abilities for extra security:

```php
// Only allow reading posts
$token = $user->createToken('mobile-reader', ['posts:read']);
```

In your API controller:

```php
public function store(Request $request)
{
    if (!$request->user()->tokenCan('posts:write')) {
        abort(403, 'Token does not have write access.');
    }
    // ...
}
```

---

## Security Best Practices

| Practice | Why |
|----------|-----|
| Use HTTPS | Tokens in plaintext over HTTP are interceptable |
| Short expiry | Set `expiration` in `config/sanctum.php` |
| Revoke on logout | Always call DELETE token on logout |
| Scope tokens | Use abilities to limit what each token can do |
| Never log tokens | Keep out of logs, error reports, analytics |

---

## Next Steps

� **[Create a Module →](../modules/create-module)**
