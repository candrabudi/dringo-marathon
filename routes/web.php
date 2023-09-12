<?php

use App\Http\Controllers\EventRegisterController;
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


Route::get('/', [EventRegisterController::class, 'index']);
Route::post('/participant/register', [EventRegisterController::class, 'register'])->name('participant.register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/create-invoice', [App\Http\Controllers\HomeController::class, 'createInvoice'])->name('create_invoice');
Route::get('/download-invoice', [App\Http\Controllers\HomeController::class, 'downloadInvoice'])->name('download_invoice');
