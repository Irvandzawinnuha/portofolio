<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\CertificationsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/skills', [SkillsController::class, 'index'])->name('skills');
    Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
    Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
    Route::get('/certifications', [CertificationsController::class, 'index'])->name('certifications');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    
    // Language Switcher
    Route::get('language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');
});

// Route untuk landing page (public)
Route::get('/', [LandingPageController::class, 'index'])->name('landing');

// Route untuk admin area
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // ... route lainnya untuk admin ...
});

require __DIR__.'/auth.php';
