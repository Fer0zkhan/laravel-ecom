<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\GenerateInvoiceController;


//login
Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login', [LoginController::class, 'store']);

//register
Route::get('/admin/register', [RegisterController::class, 'index'])->name('register');
Route::post('/admin/register', [RegisterController::class, 'store']);

//dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//order
Route::get('/admin/order/new', [OrderController::class, 'new'])->name('newOrder');
Route::get('/admin/order/pending', [OrderController::class, 'pending'])->name('pendingOrder');
Route::get('/admin/order/complete', [OrderController::class, 'complete'])->name('completeOrder');
Route::get('/admin/order/remove', [OrderController::class, 'remove'])->name('removeOrder');

//product
Route::get('/admin/product/add', [ProductController::class, 'addProduct'])->name('addProduct');
Route::get('/admin/product/active', [ProductController::class, 'activeProduct'])->name('activeProduct');
Route::get('/admin/product/deactive', [ProductController::class, 'deactiveProduct'])->name('deactiveProduct');


//user
Route::get('/admin/user/active', [UserController::class, 'activeUser'])->name('activeUser');
Route::get('/admin/user/deactive', [UserController::class, 'deactiveUser'])->name('deactiveUser');

//profile
Route::get('/admin/profile', [ProfileController::class, 'profile'])->name('profile');

//invoice
Route::get('/admin/invoice', [GenerateInvoiceController::class, 'invoice'])->name('invoice');