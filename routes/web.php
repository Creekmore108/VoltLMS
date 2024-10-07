<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Volt::route('/cor', 'courses');
Volt::route('/courses', 'pages.courses.show')->name('courses.show');
Volt::route('/episodes/{course}', 'pages.episodes.show')->name('episodes.show');
Volt::route('/course/{course}/episode/{episode?}', 'pages.episodes.watch');;

require __DIR__.'/auth.php';
