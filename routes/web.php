<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermsConditionController;

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
    return view('welcome');
});
Route::get('/admin', [\App\Http\Controllers\AdminController::class,'index']); 
 //Syarat Dan Ketentuan Dari Admin
 Route::get('/terms-and-conditions', [TermsConditionController::class,'index'])->name('syarat-dan-ketentuan');
 Route::post('/terms-and-conditions', [TermsConditionController::class,'update'])->name('syarat-dan-ketentuan.update');