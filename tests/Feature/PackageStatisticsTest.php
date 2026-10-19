<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PackageStatisticsTest extends TestCase
{
    public function test_valid_statistics_are_persisted_once_per_day(): void
    {
        Storage::fake('local');
        Http::fake(['packagist.org/*' => Http::response(['downloads' => ['total' => 100, 'monthly' => 20, 'daily' => 3]])]);
        $this->artisan('laracorekit:stats')->assertSuccessful();
        $this->artisan('laracorekit:stats')->assertSuccessful();
        $path = 'metrics/packagist/'.now('UTC')->toDateString().'.json';
        $this->assertSame(100, json_decode(Storage::disk('local')->get($path), true)['downloads']['total']);
        Http::assertSentCount(1);
    }

    public function test_unpublished_package_is_not_counted_as_zero_downloads(): void
    {
        Storage::fake('local');
        Http::fake(['packagist.org/*' => Http::response([], 404)]);
        $this->artisan('laracorekit:stats')->assertSuccessful();
        $this->assertSame([], Storage::disk('local')->allFiles());
    }

    public function test_invalid_or_failed_api_responses_do_not_create_snapshots(): void
    {
        foreach ([Http::response(['downloads' => ['total' => 'invalid']], 200), Http::response([], 503)] as $response) {
            Storage::fake('local');
            Http::fake(['packagist.org/*' => $response]);
            $this->artisan('laracorekit:stats')->assertFailed();
            $this->assertSame([], Storage::disk('local')->allFiles());
        }
    }
}
