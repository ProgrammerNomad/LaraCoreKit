<?php

namespace App\Console\Commands;

use App\Http\Controllers\SitemapController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Export the dynamic website sitemap to private storage for inspection';

    public function handle(): int
    {
        $path = storage_path('app/exports/sitemap.xml');
        File::ensureDirectoryExists(dirname($path));
        File::put($path, app(SitemapController::class)->index()->getContent());
        $this->info('Sitemap exported to '.$path);
        $this->line('Search engines should use the live /sitemap.xml route.');

        return self::SUCCESS;
    }
}
