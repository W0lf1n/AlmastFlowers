<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\SendMailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/uvod', [HomepageController::class, 'index'])->name('homepage.index');
Route::get('/o-nas', [AboutUsController::class, 'index'])->name('about_us.index');
Route::get('/kontakt', [ContactController::class, 'index'])->name('contact.index');
Route::get('/galerie', [GalleryController::class, 'index'])->name('gallery.index');

Route::get('/sending', [SendMailController::class, 'send'])->name('order.send');
Route::get('/order_mail', [SendMailController::class, 'index'])->name('mail.order');
