<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

if (config('site.collect_package_stats')) {
    Schedule::command('laracorekit:stats')->dailyAt('07:23')->withoutOverlapping();
}
