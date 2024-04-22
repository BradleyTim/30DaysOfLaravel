<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { 
    $jobs = Job::with('employer')->get();
    return view('welcome', ['jobs' => $jobs]);
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});