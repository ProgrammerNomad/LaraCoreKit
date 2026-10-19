<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class CollectPackageStats extends Command
{
    protected $signature = 'laracorekit:stats';

    protected $description = 'Save a daily Packagist download snapshot without tracking installations';

    public function handle(): int
    {
        $day = now('UTC')->toDateString();
        $path = 'metrics/packagist/'.$day.'.json';
        $disk = Storage::disk('local');
        if ($disk->exists($path)) {
            $this->info('A download snapshot already exists for '.$day.'.');

            return self::SUCCESS;
        }

        try {
            $response = Http::timeout(15)->withUserAgent('LaraCoreKit statistics (+https://www.laracorekit.com)')
                ->get('https://packagist.org/packages/programmernomad/laracorekit/stats.json');
            if ($response->status() === 404) {
                $this->line('Package is not registered yet; no snapshot was recorded.');

                return self::SUCCESS;
            }
            $response->throw();
            $downloads = $response->json('downloads');
            foreach (['total', 'monthly', 'daily'] as $field) {
                if (! is_array($downloads) || ! isset($downloads[$field]) || ! is_int($downloads[$field]) || $downloads[$field] < 0) {
                    throw new \RuntimeException('Invalid Packagist statistics response.');
                }
            }
            $saved = $disk->put($path, json_encode([
                'package' => 'programmernomad/laracorekit',
                'collected_at' => now('UTC')->toIso8601String(),
                'downloads' => $downloads,
                'metric' => 'downloads, not unique developers or installations',
            ], JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR));
            if (! $saved) {
                throw new \RuntimeException('Could not persist download statistics.');
            }
        } catch (\Throwable $error) {
            $this->error('Statistics collection failed; no zero-valued replacement was recorded. '.$error->getMessage());

            return self::FAILURE;
        }

        $this->info('Download snapshot saved for '.$day.'.');

        return self::SUCCESS;
    }
}
