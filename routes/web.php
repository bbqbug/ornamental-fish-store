<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
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
    return view('home');
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/signin', function () {
    return view('auth/signin');
});


Route::get('/signup', function () {
    return view('auth/signup');
});


Route::prefix('admin')->group(function() {
    Route::get('login', [AdminController::class, 'getLogin'])->name('admin-login');
    Route::post('login', [AdminController::class, 'postLogin'])->name('admin-login');
    Route::post('logout', [AdminController::class, 'logout'])->name('admin-logout');

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');

    Route::post('account', [AdminController::class, 'account'])->name('admin-account');

    Route::get('products', [AdminController::class, 'product'])->name('admin-product');

    Route::get('orders', [AdminController::class, 'order'])->name('admin-order');

    Route::get('users', [UserController::class, 'index'])->name('admin-index');
});
