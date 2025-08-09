<?php

use App\Http\Controllers\Frontend\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GeneralController::class, 'index'])->name('index');
Route::get('/page/{slug}', [GeneralController::class, 'page'])->name('page');
Route::get('/events', [GeneralController::class, 'events'])->name('events');
Route::get('/event/{slug}', [GeneralController::class, 'singleEvent'])->name('singleEvent');
Route::get('/photos', [GeneralController::class, 'photos'])->name('photos');
Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');

Route::post('/sendMessage', [GeneralController::class, 'sendMessage'])->name('sendMessage')->middleware('throttle:1,1');
Route::post('/subscribe', [GeneralController::class, 'subscribe'])->name('subscribe')->middleware('throttle:1,1');
