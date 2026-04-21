# Media Management

**Estimated time:** 6 minutes  
**Difficulty:** Beginner

---

LaraCoreKit uses **Spatie Laravel MediaLibrary** for file uploads, image optimization, and media management.

---

## Features

- Upload any file type
- Automatic image conversions (thumbnails, etc.)
- Store locally or on S3
- Admin media browser
- Associate media with any Eloquent model

---

## Setup

Add `HasMedia` and `InteractsWithMedia` to any model:

```php
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover')
             ->singleFile()  // Only one cover per post
             ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp']);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
             ->width(400)
             ->height(300)
             ->sharpen(10);

        $this->addMediaConversion('og')
             ->width(1200)
             ->height(630);
    }
}
```

---

## Uploading Files

### From Request (controller/Livewire)

```php
// Upload from file upload
$post->addMediaFromRequest('cover_image')
     ->toMediaCollection('cover');

// Upload from URL
$post->addMediaFromUrl('https://www.laracorekit.com/image.jpg')
     ->toMediaCollection('cover');

// Upload from existing file path
$post->addMedia('/path/to/file.jpg')
     ->toMediaCollection('cover');
```

---

## Retrieving Media

```php
// Get first media URL
$coverUrl = $post->getFirstMediaUrl('cover');

// Get thumbnail conversion
$thumbUrl = $post->getFirstMediaUrl('cover', 'thumb');

// Get all media
$allImages = $post->getMedia('images');

// Check if media exists
if ($post->hasMedia('cover')) {
    // ...
}
```

---

## In Blade Templates

```blade
<img
    src="{{ $post->getFirstMediaUrl('cover', 'thumb') }}"
    alt="{{ $post->title }}"
    loading="lazy"
>
```

---

## Admin Media Library

Access the media browser at `/admin/media` to:
- Browse all uploaded files
- Delete unused media
- Preview images

---

## Storage Configuration

For production, use S3:

```env
FILESYSTEM_DISK=s3
AWS_ACCESS_KEY_ID=your-key
AWS_SECRET_ACCESS_KEY=your-secret
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=your-bucket
```

---

## Next Steps

**[Settings →](settings)**


