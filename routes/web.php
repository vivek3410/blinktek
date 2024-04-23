<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index'])->name('/');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/features',[HomeController::class,'features'])->name('features');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');