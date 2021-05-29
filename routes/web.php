<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
// Route::get('/enquiry/list', function () {
//     return view('enquiry-list');
// });

// Route::get('/about', [App\Http\Controllers\AsociateController::class, 'index'])->name('index');
Route::post('/about/enquiry', [App\Http\Controllers\EnquiryController::class, 'create'])->name('enquiry');
Route::get('/enquiry/list', [App\Http\Controllers\EnquiryController::class, 'index']);
Route::get('/asociate', [App\Http\Controllers\AsociateController::class, 'index'])->name('asociate');
Route::post('/asociate', [App\Http\Controllers\AsociateController::class, 'search']);
Route::get('/single/ngo/{id}', [App\Http\Controllers\AsociateController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home/update', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::post('/home/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/home/ngo/delete/{id}', [App\Http\Controllers\HomeController::class, 'destroy']);
