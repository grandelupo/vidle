<?php

use App\Http\Controllers\ChapterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\VideoController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('videos', VideoController::class);

Route::resource('comments', CommentController::class);

Route::get('chapters/create', [ChapterController::class, 'create'])
    ->name('chapters.create');

Route::post('chapters/store', [ChapterController::class, 'store'])
    ->name('chapters.store');

require __DIR__.'/auth.php';
