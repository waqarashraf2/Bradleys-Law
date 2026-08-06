<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\InsightController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminNewsletterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/



Route::get('/auth', [AuthController::class, 'showAuthForm'])->name('auth.form');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('/services', App\Http\Controllers\Admin\AdminServiceController::class);
    Route::resource('/insights', App\Http\Controllers\Admin\AdminInsightController::class);
    Route::resource('/messages', App\Http\Controllers\Admin\AdminMessageController::class)->only(['index', 'destroy']);
    Route::resource('/users', App\Http\Controllers\Admin\AdminUserController::class)->only(['index', 'destroy']);
    Route::get('/newsletter', [AdminNewsletterController::class, 'index'])->name('newsletter.index');
});




Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/legal', [PageController::class, 'legal'])->name('legal');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');

// Expertise (Services)
Route::get('/expertise', [ServiceController::class, 'index'])->name('expertise.index');
Route::get('/expertise/{slug}', [ServiceController::class, 'show'])->name('expertise.show');

// Insights (Blog/Resources)
Route::get('/insights', [InsightController::class, 'index'])->name('insights');
Route::get('/insights/{insight:slug}', [InsightController::class, 'show'])->name('insights.show');
