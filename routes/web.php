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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/mobil', [App\Http\Controllers\MobilController::class, 'index']);
Route::get('/contact/create', [App\Http\Controllers\SaranController::class, 'create']);
Route::post('/contact', [App\Http\Controllers\SaranController::class, 'store']);
Route::get('/form/create', [App\Http\Controllers\FormRentController::class, 'create']);
Route::post('/form', [App\Http\Controllers\FormRentController::class, 'store']);