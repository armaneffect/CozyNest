<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/browseposts', [PostController::class, 'index'])->name('browseposts');

// User Routes
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/user/createpost', [PostController::class, 'create'])->name('posts.create');
    Route::get('/user/dashboard', [PostController::class, 'dashboard'])->name('user.dashboard');
    Route::post('/user/storepost', [PostController::class, 'store'])->name('posts.store');
    Route::get('/user/manageposts', [PostController::class, 'managePosts'])->name('user.manageposts');
});

// Post Routes
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show')->middleware('auth');


// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/manageposts', [AdminController::class, 'managePosts'])->name('admin.manageposts');
    Route::delete('/admin/posts/{id}', [AdminController::class, 'destroy'])->name('posts.destroy');
    Route::get('/admin/manageusers', [AdminController::class, 'manageUsers'])->name('admin.manageusers');
});


// Dashboard Redirect
Route::get('/dashboard', function () {

    if (Auth::user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('user.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
