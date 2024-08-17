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

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/doctors', [App\Http\Controllers\HomeController::class, 'doctors']);
Route::get('/add-doctor', [App\Http\Controllers\HomeController::class, 'addDoctor']);
Route::post('/submit-doctor', [App\Http\Controllers\HomeController::class, 'storeDoctor']);
Route::get('/doctors/{id}/delete', [App\Http\Controllers\HomeController::class, 'deleteDoctor']);
Route::get('/doctors/{id}/edit', [App\Http\Controllers\HomeController::class, 'editDoctor']);
Route::post('/doctors/{id}/update', [App\Http\Controllers\HomeController::class, 'updateDoctor']);

