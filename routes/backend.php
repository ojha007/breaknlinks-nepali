<?php


use App\Http\Controllers\Backend\AuthorController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('news/archive', [NewsController::class, 'archive'])->name('news.archive');
Route::post('news/restore/{id}', [NewsController::class, 'restore'])->name('news.restore');
Route::resource('news', NewsController::class);
Route::resource('categories', CategoryController::class, ['expect' => ['create']]);
Route::resource('authors', AuthorController::class, ['expect' => ['create']]);
