<?php

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
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/config', [App\Http\Controllers\ConfigAppController::class, 'index'])->name('dashboard');

// Resources
Route::resource('contact', App\Http\Controllers\ContactController::class);
Route::resource('config', App\Http\Controllers\ConfigAppController::class);
Route::get('/gdpr', function () {
     return view('gdpr');
});


// Route::get('/welcome', function () {
//     return view('welcome');
// });

