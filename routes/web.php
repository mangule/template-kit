<?php

use App\Livewire\Demo1\Index as Demo1Index;
use App\Livewire\Demo1\Profile as Demo1Profile;
use App\Livewire\Demo1\Settings as Demo1Settings;
use App\Livewire\Demo1\Users as Demo1Users;
use App\Livewire\Role\Create;
use App\Livewire\Role\Edit;
use App\Livewire\Role\Index;
use App\Livewire\Users\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Demo1 routes
Route::get('/demo1', Demo1Index::class)->name('demo1.index');
Route::get('/demo1/profile', Demo1Profile::class)->name('demo1.profile');
Route::get('/demo1/settings', Demo1Settings::class)->name('demo1.settings');
Route::get('/demo1/users', Demo1Users::class)->name('demo1.users');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::livewire('users', Listing::class)->name('users');

    Route::get('/roles', Index::class)
    ->middleware('can:manage.roles')
    ->name('roles.index');

    Route::get('/roles/create', Create::class)
    ->middleware('can:manage.roles')
    ->name('roles.create');

    Route::get('/roles/{role}/edit', Edit::class)
    ->middleware('can:manage.roles')
    ->name('roles.edit');
});
