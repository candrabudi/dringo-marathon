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
Route::post('/callback/invoice-xendit', [EventRegisterController::class, 'receiveXenditInvoiceCallback'])->name('receiveXenditInvoiceCallback');
