<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TermsConditionController;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'role:3'], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    // Syarat Dan Ketentuan Dari Admin
    Route::get('/terms-and-conditions', [TermsConditionController::class, 'index'])->name('syarat-dan-ketentuan');
    Route::post('/terms-and-conditions', [TermsConditionController::class, 'update'])->name('syarat-dan-ketentuan.update');
    // Kategori Ekskul Dari Admin
    Route::get('/category', [CategoryController::class, 'index'])->name('kategori');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('kategori.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('kategori.store');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('kategori.destroy');
    // Tambah User Dari Admin
    Route::get('/add-user', [AddUserController::class, 'index'])->name('tambah-user');
    Route::get('/filter-user', [AddUserController::class, 'search'])->name('filter-user');
    Route::post('/add-user/create', [AddUserController::class, 'create'])->name('tambah-user.create');
    Route::put('/update-user/{id}', [AddUserController::class, 'update'])->name('update-user');
    Route::delete('/delete-user/{id}', [AddUserController::class, 'destroy'])->name('delete-user');
});
