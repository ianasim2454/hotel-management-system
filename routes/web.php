<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home',[AdminController::class,'index'])->name('home');

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/room',[RoomController::class,'room']);
Route::get('/gallery',[GalleryController::class,'gallery']);
Route::get('/service',[ServiceController::class,'service']);
Route::get('/contact',[ContactController::class,'contact']);
Route::post('/contact/store',[ContactController::class,'contactRequest'])->name('contact.store');
