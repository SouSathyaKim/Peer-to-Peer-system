<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserContoller;
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

Route::get('/', function () {

    return view('auth/register');
});
Route::post('/register', [AdminController::class, 'registerAdmin'])->name('register');
Route::get('/loginAdmin', function(){
    return view('auth/login');
});
Route::post('/loginAdmin', [AdminController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('/logoutAdmin', [AdminController::class, 'logoutAdmin'])->name('logoutAdmin');
Route::get('/home', [UserContoller::class, 'userTable'])->name('userTable');

Route::post('/addUser', [UserContoller::class, 'addUser'])->name('addUser');
Route::put('/editUser/{user}', [UserContoller::class, 'editUser'])->name('editUser');
Route::delete('/deleteUser/{user}', [UserContoller::class, 'deleteUser'])->name('deleteUser');

Route::get('/transactionmonitoring', [TransactionController::class, 'displayTransaction'])->name('displayTransaction');
Route::post('/addTransaction', [TransactionController::class, 'store'])->name('store');
Route::delete('/deleteTransaction/{transaction}', [TransactionController::class, 'deleteTransaction'])->name('deleteTransaction');

Route::get('/dashboard', function(){
    return view('dashboard');
});
