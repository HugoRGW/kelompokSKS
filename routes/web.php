<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
// Syarat Dan Ketentuan Dari Admin
Route::get('/terms-and-conditions', [TermsConditionController::class, 'index'])->name('syarat-dan-ketentuan');
Route::post('/terms-and-conditions', [TermsConditionController::class, 'update'])->name('syarat-dan-ketentuan.update');
// Kategori Ekskul Dari Admin
Route::get('/category', [CategoryController::class, 'index'])->name('kategori');
Route::get('/category/create', [CategoryController::class, 'create'])->name('kategori.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('kategori.store');
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('kategori.destroy');

//Personal Information
Route::get('/personal', [DataAdminController::class, 'index'])->name('personal.information');
Route::put('updata',[DataAdminController::class,'updata']);



Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/artikel',[App\Http\Controllers\HomeController::class,'artikel']);
Route::get('/about',[App\Http\Controllers\HomeController::class,'about']);
Route::get('/contact',[App\Http\Controllers\HomeController::class,'contact']);