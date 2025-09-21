<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('check:enum', function () {
    print_r(\App\Enum\JobListingCategory::values());
    print_r(\App\Enum\JobListingCategory::toObj());
})->purpose('Check Enum Values and Labels');
