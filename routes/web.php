<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formSendController;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;

Route::inertia('/', 'HomeView')->name('home');

Route::inertia('/privacy_policy', 'PolicyView')->name('policy');

Route::resource('/formSend', formSendController::class)->middleware([HandlePrecognitiveRequests::class]);

// Route::put('/updatePrice', [formSendController::class, 'update']);

Route::inertia('/admin-panel', 'AdminPanel')->middleware('auth');
Route::inertia('/admin-login', 'AdminLogin');
Route::post('adminLogin', [AdminController::class, 'login'])->middleware([HandlePrecognitiveRequests::class]);