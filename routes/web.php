<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TermsConditionController;
use App\Models\Contact;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostinganController;


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
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
    Route::post('/add-user/create', [AddUserController::class, 'create'])->name('tambah-user.create');
    // Data User
    Route::get('/data-user', [DataUserController::class, 'index'])->name('data-user');
    Route::get('/filter-user', [DataUserController::class, 'search'])->name('filter-user');
    Route::put('/update-user/{id}', [DataUserController::class, 'update'])->name('update-user');
    Route::delete('/delete-user/{id}', [DataUserController::class, 'destroy'])->name('delete-user');
    // Halaman Kontak
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/report', [ContactController::class, 'report'])->name('report');
    Route::get('/report-data', [ContactController::class, 'reportData'])->name('report-data');
    Route::get('/filter-data', [ContactController::class, 'search'])->name('filter-data');
    Route::delete('/delete-data/{id}', [ContactController::class, 'destroy'])->name('delete-data');
    // Halaman Postingan
    route::get('/postingan', [PostinganController::class, 'postingan'])->name('postingan');
    Route::post('/diterima', [PostinganController::class, 'diterima'])->name('diterima');
    Route::post('/ditolak/{id}', [PostinganController::class, 'ditolak'])->name('ditolak');
    Route::get('/terima', [PostinganController::class, 'terima'])->name('terima');
    route::get('/deletepost/{id}', [PostinganController::class, 'deletepost'])->name('deletepost');

});

//Personal Information
Route::get('/personal', [DataAdminController::class, 'index'])->name('personal.information');
Route::put('updata', [DataAdminController::class, 'updata']);
Route::get('/artikel', [App\Http\Controllers\HomeController::class, 'artikel']);
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);

//ekskul
route::get('/basket', [App\Http\Controllers\EkskulControlller::class, 'basket'])->name('basket');
route::get('/bdi', [App\Http\Controllers\EkskulControlller::class, 'bdi'])->name('bdi');
route::get('/bahasajepang', [App\Http\Controllers\EkskulControlller::class, 'bahasajepang'])->name('bahasajepang');
route::get('/pramuka', [App\Http\Controllers\EkskulControlller::class, 'pramuka'])->name('pramuka');
route::get('/webdesign', [App\Http\Controllers\EkskulControlller::class, 'webdesign'])->name('webdesign');
route::get('/voli', [App\Http\Controllers\EkskulControlller::class, 'voli'])->name('voli');
route::get('/band', [App\Http\Controllers\EkskulControlller::class, 'band'])->name('band');
route::get('/pecintaalam', [App\Http\Controllers\EkskulControlller::class, 'pecintaalam'])->name('pecintaalam');
route::get('/robotik', [App\Http\Controllers\EkskulControlller::class, 'robotik'])->name('robotik');

route::get('/foto',[App\Http\Controllers\PhotoController::class,'index'])->name('foto');

route::get('/posts/{id}', [PostinganController::class, 'posts'])->name('posts');
route::get('/pending/{id}',[App\Http\Controllers\PostinganController::class,'pending'])->name('pending');
Route::get('/tolak/{id}', [PostinganController::class, 'tolak'])->name('tolak');
route::get('/tambah-postingan',[App\Http\Controllers\PostinganController::class,'tambah'])->name('tambah.postingan');
route::post('/insertdatapost', [PostinganController::class, 'insertdatapost'])->name('insert.postingan');
route::get('/tampilkandatapostingan/{id}', [PostinganController::class, 'tampilkandatapostingan'])->name('tampilkandatapostingan');
route::post('/updt/{id}', [PostinganController::class, 'updt'])->name('updt');
route::get('/deletepostingan/{id}', [PostinganController::class, 'deletepostingan'])->name('deletepostingan');
Route::get('/show/{id}', [PostinganController::class, 'show'])->name('show');