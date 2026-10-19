# Caching

Choose a cache store appropriate to deployment. Settings-page reads cache individual keys and saves invalidate those keys. Blog category caching includes the locale in its key.

Authentication throttles use Laravel's cache-backed rate limiter. Use shared storage across servers so limits cannot be bypassed by switching application instances. Avoid broad cache flushes in ordinary content actions.

Deploy using reviewed configuration/route/view caching and clear stale caches when changing providers or package settings. Application-specific content caching and invalidation need their own tests.

See [installation](/docs/installation) and [package architecture](/docs/core/architecture).
