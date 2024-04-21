<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DanhmucController;
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

//Frontend
Route::get('/', [HomeController:: class, 'index']);
Route::get('/admin', [AdminController:: class, 'index']);
Route::get('/dashboard', [AdminController:: class, 'dashboard']);







//Backend






//khac
Route::get('/product', [ProductController:: class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController:: class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/Danhmuc', [DanhmucController::class, 'index'])->name('Danhmuc.index');

