<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the XML sitemap for search engines.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Use the configured app url or the local dev server
        $appUrl = config('app.url') === 'http://localhost' ? 'http://127.0.0.1:8000' : config('app.url');

        $this->info("Crawling {$appUrl} to generate sitemap...");

        SitemapGenerator::create($appUrl)
            ->hasCrawled(function (Url $url) {
                // Ignore admin panel and livewire internal routes
                if ($url->segment(1) === 'admin' || $url->segment(1) === 'livewire') {
                    return null;
                }

                return $url;
            })
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully in public/sitemap.xml!');
    }
}
