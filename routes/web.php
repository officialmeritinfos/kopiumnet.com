<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[Home::class,'landingPage'])
    ->name('home.index');
Route::get('about',[Home::class,'about'])
    ->name('home.about');
Route::get('faq',[Home::class,'faqs'])
    ->name('home.faqs');
Route::get('team',[Home::class,'teams'])
    ->name('home.teams');
Route::get('products',[Home::class,'products'])
    ->name('home.products');
Route::get('terms',[Home::class,'terms'])
    ->name('home.terms');
Route::get('services',[Home::class,'services'])
    ->name('home.services');
Route::get('service/{slug}/detail',[Home::class,'serviceDetail'])
    ->name('home.service.detail');
Route::get('contact',[Home::class,'contact'])
    ->name('home.contact');
Route::get('booking',[Home::class,'book'])
    ->name('home.book');
