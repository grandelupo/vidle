<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VideoController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::view('welcome', 'welcome')
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('videos', VideoController::class)
    ->middleware(['auth'])
    ->name('index', 'videos.index');

Route::resource('comments', CommentController::class);

Route::get('chapters/create', [ChapterController::class, 'create'])
    ->name('chapters.create');

Route::post('chapters/store', [ChapterController::class, 'store'])
    ->name('chapters.store');

Route::post('contact', [ContactController::class, 'store'])
    ->name('contact.store');

Route::post('login', [AuthController::class, 'login'])
    ->name('auth.login');
Route::post('logout', [AuthController::class, 'logout'])
    ->name('auth.logout');
Route::post('register', [AuthController::class, 'register'])
    ->name('auth.register');

require __DIR__.'/auth.php';
