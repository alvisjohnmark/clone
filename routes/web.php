<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/comment', [CommentController::class, 'store'])->name('comment.create'); //form

Route::delete('/comment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy'); //form

Route::get('/term', [DashboardController::class, 'terms']);