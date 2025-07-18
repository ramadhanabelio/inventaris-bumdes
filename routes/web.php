<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\LoanController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InventoryController;

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
    return view('landing-page');
});

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('home', [BorrowController::class, 'index'])->name('borrow.home');
    Route::get('asset', [BorrowController::class, 'assets'])->name('borrow.asset');
    Route::get('history', [BorrowController::class, 'history'])->name('borrow.history');
    Route::get('loan', [BorrowController::class, 'create'])->name('borrow.loan.create');
    Route::post('loan', [BorrowController::class, 'store'])->name('borrow.loan.store');

    Route::prefix('admin')->name('admin.')->middleware('is_admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('categories', CategoryController::class);
        Route::resource('users', UserController::class);
        Route::resource('items', ItemController::class);
        Route::get('items/{item}/detail', [ItemController::class, 'detail'])->name('items.detail');
        Route::get('items-export-pdf', [ItemController::class, 'exportPdf'])->name('items.export.pdf');
        Route::resource('inventories', InventoryController::class);
        Route::get('inventories-export-pdf', [InventoryController::class, 'exportPdf'])->name('inventories.export.pdf');
        Route::resource('loans', LoanController::class);
        Route::get('loans-export-pdf', [LoanController::class, 'exportPdf'])->name('loans.export.pdf');
        Route::post('loans/{loan}/approve', [LoanController::class, 'approve'])->name('loans.approve');
        Route::post('loans/{loan}/reject', [LoanController::class, 'reject'])->name('loans.reject');
        Route::post('loans/{loan}/return', [LoanController::class, 'returned'])->name('loans.return');
    });
});
