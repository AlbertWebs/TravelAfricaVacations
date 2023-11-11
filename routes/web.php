<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact-us');
Route::get('/destinations', [App\Http\Controllers\HomeController::class, 'destinations'])->name('destinations');
Route::get('/conferencing', [App\Http\Controllers\HomeController::class, 'conferencing'])->name('conferencing');
Route::get('/travel-guide', [App\Http\Controllers\HomeController::class, 'guide'])->name('travel-guide');
Route::get('/destinations/{slung}', [App\Http\Controllers\HomeController::class, 'destination'])->name('destination');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog-us');
Route::get('/destination', [App\Http\Controllers\HomeController::class, 'destination'])->name('destination');
Route::get('/copyright-statement', [App\Http\Controllers\HomeController::class, 'copyright'])->name('copyright-statement');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'policy'])->name('privacy-policy');


