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

                // Set priority and change frequency based on URL patterns
                $path = $url->path();
                
                // Homepage - highest priority
                if ($path === '/') {
                    $url->setPriority(1.0)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                        ->setLastModificationDate(now());
                }
                // Blog posts - high priority, updated frequently
                elseif (str_starts_with($path, '/blog/')) {
                    $url->setPriority(0.8)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                        ->setLastModificationDate(now());
                }
                // Main sections (blog, docs, ui-showcase)
                elseif (in_array($path, ['/blog', '/docs', '/ui-showcase'])) {
                    $url->setPriority(0.9)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                        ->setLastModificationDate(now());
                }
                // Documentation pages
                elseif (str_starts_with($path, '/docs/')) {
                    $url->setPriority(0.7)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                        ->setLastModificationDate(now());
                }
                // UI Showcase pages
                elseif (str_starts_with($path, '/ui-showcase/')) {
                    $url->setPriority(0.6)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                        ->setLastModificationDate(now());
                }
                // Auth pages (login, register) - lower priority
                elseif (in_array($path, ['/login', '/register', '/forgot-password'])) {
                    $url->setPriority(0.3)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                        ->setLastModificationDate(now());
                }
                // Everything else - medium priority
                else {
                    $url->setPriority(0.5)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                        ->setLastModificationDate(now());
                }

                return $url;
            })
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully in public/sitemap.xml!');
    }
}
