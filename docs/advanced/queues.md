# Queues

**Estimated time:** 8 minutes  
**Difficulty:** Intermediate

---

Queues offload time-consuming tasks (sending emails, image processing, API calls) out of the web request, keeping your app fast and responsive.

---

## Configuration

Set the queue connection in `.env`:

```env
QUEUE_CONNECTION=redis     # Production (recommended)
QUEUE_CONNECTION=database  # Simple fallback
QUEUE_CONNECTION=sync      # Development (no workers needed)
```

For database driver, create the jobs table:

```bash
php artisan queue:table
php artisan migrate
```

---

## Creating a Job

```bash
php artisan make:job SendWelcomeEmail
```

```php
<?php

namespace App\Jobs;

use App\Mail\WelcomeMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Modules\User\Models\User;

class SendWelcomeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries   = 3;
    public int $timeout = 30;

    public function __construct(private User $user)
    {
        $this->onQueue('emails');
    }

    public function handle(): void
    {
        Mail::to($this->user->email)->send(new WelcomeMail($this->user));
    }

    public function failed(\Throwable $exception): void
    {
        // Log failure, notify admin, etc.
        \Log::error('Welcome email failed', [
            'user_id' => $this->user->id,
            'error'   => $exception->getMessage(),
        ]);
    }
}
```

---

## Dispatching Jobs

```php
// Dispatch immediately
SendWelcomeEmail::dispatch($user);

// Dispatch after delay
SendWelcomeEmail::dispatch($user)->delay(now()->addMinutes(5));

// Dispatch to a specific queue
SendWelcomeEmail::dispatch($user)->onQueue('emails');

// Dispatch on specific connection
SendWelcomeEmail::dispatch($user)->onConnection('redis');

// Dispatch synchronously (ignore queue)
SendWelcomeEmail::dispatchSync($user);
```

---

## Running Workers

```bash
# Basic worker
php artisan queue:work

# Worker with specifics
php artisan queue:work redis --queue=emails,default --sleep=3 --tries=3

# Process only one job then stop
php artisan queue:work --once

# Graceful shutdown after current job
php artisan queue:restart
```

---

## Queues in Livewire

Dispatch jobs from Livewire components:

```php
class RegisterForm extends Component
{
    public function register(): void
    {
        $user = User::create($this->validated());

        // Dispatch to queue - don't block the response
        SendWelcomeEmail::dispatch($user);
        SendVerificationEmail::dispatch($user);

        $this->redirect(route('home'));
    }
}
```

---

## Chaining Jobs

```php
use Illuminate\Support\Facades\Bus;

Bus::chain([
    new ProcessPayment($order),
    new SendReceiptEmail($order),
    new UpdateInventory($order),
])->dispatch();
```

---

## Failed Jobs

```bash
# View failed jobs
php artisan queue:failed

# Retry a single failed job
php artisan queue:retry {id}

# Retry all failed jobs
php artisan queue:retry all

# Delete all failed jobs
php artisan queue:flush
```

---

## Supervisor Configuration

For production, run workers with Supervisor:

```ini
[program:laracorekit-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/html/artisan queue:work redis --sleep=3 --tries=3 --max-time=3600
autostart=true
autorestart=true
user=www-data
numprocs=2
redirect_stderr=true
stdout_logfile=/var/log/laracorekit-worker.log
stopwaitsecs=3600
```

---

## Next Steps

**[Search →](search)**
