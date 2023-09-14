<?php

use App\Http\Controllers\AdminController;
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

Route::prefix('admin')->group(function ($router) {
   $router->get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
   $router->get('/participant', [AdminController::class, 'participant'])->name('admin.participant');
   $router->post('/participant/update/{id}', [AdminController::class, 'update'])->name('admin.update');
   $router->get('/list-participant', [AdminController::class, 'dataTable'])->name('admin.dataTable');
});