<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/jobs', \App\Http\Controllers\JobListingController::class)->only(['index', 'show']);
