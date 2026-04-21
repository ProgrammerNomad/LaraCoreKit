# API Endpoints

**Estimated time:** 8 minutes  
**Difficulty:** Intermediate

---

LaraCoreKit provides a set of REST API endpoints for accessing data programmatically from mobile apps, SPAs, or third-party integrations.

---

## Base URL

```
https://www.laracorekit.com/api
```

All API responses use JSON format. Always include:

```
Accept: application/json
```

---

## Authentication Endpoints

| Method | Endpoint | Auth | Description |
|--------|----------|------|-------------|
| `POST` | `/api/tokens` | No | Issue an API token |
| `DELETE` | `/api/tokens/current` |  | Revoke current token |
| `DELETE` | `/api/tokens` |  | Revoke all tokens |

---

## User Endpoints

| Method | Endpoint | Auth | Description |
|--------|----------|------|-------------|
| `GET` | `/api/user` |  | Get the authenticated user |
| `PUT` | `/api/user` |  | Update user profile |
| `PUT` | `/api/user/password` |  | Change password |

---

## Blog Endpoints

| Method | Endpoint | Auth | Description |
|--------|----------|------|-------------|
| `GET` | `/api/posts` | No | List published posts |
| `GET` | `/api/posts/{slug}` | No | Get a single post |

---

## Settings Endpoint

| Method | Endpoint | Auth | Description |
|--------|----------|------|-------------|
| `GET` | `/api/settings` | No | Get public site settings |

---

## Pagination

List endpoints return paginated responses:

```json
{
    "data": [
        { "id": 1, "title": "First Post", "slug": "first-post" }
    ],
    "meta": {
        "current_page": 1,
        "last_page": 5,
        "per_page": 15,
        "total": 72
    },
    "links": {
        "first": "https://www.laracorekit.com/api/posts?page=1",
        "next":  "https://www.laracorekit.com/api/posts?page=2",
        "prev":  null,
        "last":  "https://www.laracorekit.com/api/posts?page=5"
    }
}
```

Pass `?page=2&per_page=20` to paginate.

---

## Query Parameters

For list endpoints:

```
GET /api/posts?locale=en&status=published&page=1&per_page=12
```

| Parameter | Type | Default | Description |
|-----------|------|---------|-------------|
| `locale` | string | `en` | Filter by language |
| `page` | integer | `1` | Page number |
| `per_page` | integer | `15` | Items per page (max 100) |

---

## Error Responses

```json
{
    "message": "Unauthenticated.",
    "errors": {}
}
```

| Status Code | Meaning |
|-------------|---------|
| `200` | Success |
| `201` | Created |
| `400` | Bad request |
| `401` | Unauthenticated |
| `403` | Unauthorized |
| `404` | Not found |
| `422` | Validation failed |
| `500` | Server error |

### Validation Error

```json
{
    "message": "The email field is required.",
    "errors": {
        "email": ["The email field is required."]
    }
}
```

---

## Adding a New API Endpoint

1. Create a controller in your module:

```php
namespace Modules\Blog\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Blog\Models\Post;

class PostApiController extends Controller
{
    public function index(): JsonResponse
    {
        $posts = Post::published()
            ->locale(request('locale', 'en'))
            ->latest()
            ->paginate(request('per_page', 15));

        return response()->json($posts);
    }

    public function show(string $slug): JsonResponse
    {
        $post = Post::published()->where('slug', $slug)->firstOrFail();

        return response()->json(['data' => $post]);
    }
}
```

2. Register routes in `modules/Blog/routes/api.php`:

```php
Route::prefix('api')->group(function () {
    Route::get('/posts', [PostApiController::class, 'index']);
    Route::get('/posts/{slug}', [PostApiController::class, 'show']);
});
```

---

## Next Steps

**[API Auth Flow →](authentication)**


