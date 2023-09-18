<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);
// Syarat Dan Ketentuan Dari Admin
Route::get('/terms-and-conditions', [TermsConditionController::class, 'index'])->name('syarat-dan-ketentuan');
Route::post('/terms-and-conditions', [TermsConditionController::class, 'update'])->name('syarat-dan-ketentuan.update');
// Kategori Ekskul Dari Admin
Route::get('/category', [CategoryController::class, 'index'])->name('kategori');
Route::get('/category/create', [CategoryController::class, 'create'])->name('kategori.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('kategori.store');
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('kategori.destroy');
