<?php

use Livewire\Volt\Volt;

Volt::route('/', 'landing-page')->name('home');
Volt::route('/dashboard', 'landing-page')->name('dashboard');
Volt::route('/programs', 'landing-page')->name('programs');
Volt::route('/sign-in', 'landing-page')->name('sign-in');
