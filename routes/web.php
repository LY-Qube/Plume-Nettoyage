<?php

use Illuminate\Support\Facades\Route;

Route::view('/','landing')->name('welcome');

Route::post('/contact', [\App\Http\Controllers\ContactController::class,'contact'])->name('contact');
Route::post('/call-me', [\App\Http\Controllers\ContactController::class,'call'])->name('call-me');
