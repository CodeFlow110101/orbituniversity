<?php

use App\Http\Controllers\FileUploadController;
use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;

Volt::route('/', 'landing-page')->name('home');
Volt::route('/dashboard', 'landing-page')->name('dashboard');
Volt::route('/program', 'landing-page')->name('program');
Volt::route('/sign-in', 'landing-page')->name('sign-in');
Volt::route('/setting', 'landing-page')->name('setting');
Volt::route('/admin', 'landing-page')->name('admin');
Volt::route('/add-program', 'landing-page')->name('add-program');

Route::post('/upload-file', [FileUploadController::class, 'store']);
