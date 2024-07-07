<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PinController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\ApplyLoanController;
use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\DB;

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

// Main pages
Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/service', [PageController::class, 'service']);
Route::get('/project', [PageController::class, 'project']);
Route::get('/feedback', [PageController::class, 'feedback']);
Route::get('/team', [PageController::class, 'team']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/profile', [PageController::class, 'profile']);
Route::get('/loancal', [PageController::class, 'loancal']);
Route::get('/payment', [PageController::class, 'payment']);
Route::get('/deposit', [PageController::class, 'deposit']);
Route::get('/applyloan', [PageController::class, 'applyloan']);
Route::get('/pin', [PageController::class, 'pin']);
Route::get('/transfer', [PageController::class, 'transfer']);
Route::get('/transaction_history', [PageController::class, 'transaction_history']);
Route::get('/history', [PageController::class, 'history']);

// Authentication
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPOST'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

// Payment
Route::get('/payment', [PaymentController::class, 'create'])->name('payment.create');
Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store');

// Create pin
Route::get('/create-pin', [PinController::class, 'create'])->name('pin.create');
Route::post('/create-pin', [PinController::class, 'store'])->name('pin.store');

// Deposit
Route::get('/deposit', [DepositController::class, 'create'])->name('deposit.create');
Route::post('/deposit', [DepositController::class, 'store'])->name('deposit.store');

// Apply loan
Route::get('/apply-loan', [ApplyLoanController::class, 'create'])->name('apply_loan.create');
Route::post('/apply-loan', [ApplyLoanController::class, 'store'])->name('apply_loan.store');

// Transfer
Route::get('/transfer', [TransferController::class, 'create'])->name('transfer.create');
Route::post('/transfer', [TransferController::class, 'store'])->name('transfer.store');

// Combined records

Route::get('/records', [PageController::class, 'records'])->name('records');
