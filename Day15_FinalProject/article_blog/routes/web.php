<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/dashboard', function () {
    // 1. نجيب اليوزر الحالي
    $user = Auth::user();

    // 2. نعد المقالات الخاصة بيه
    $userArticlesCount = Article::where('user_id', $user->id)->count();

    // 3. نبعت العدد لصفحة dashboard.blade.php
    return view('dashboard', compact('userArticlesCount'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Public routes - anyone can view articles (no login required)

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index'); // List all articles
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit'); // List all articles
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update'); // List all articles
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy'); // List all articles


// Protected CRUD routes - only authenticated users can access
Route::middleware(['auth'])->group(function () {
    // Resource routes for articles (create, store, edit, update, destroy, show)
    // except(['index']) means skip index route (already defined above)
    Route::resource('articles', ArticleController::class)->except(['index']);
});