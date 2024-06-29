<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\KriteriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MatriksController;
use App\Http\Controllers\PerangkinganController;
use App\Http\Controllers\SocialController;

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

Route::group(['prefix' => 'customer', 'middleware' => ['auth'], 'as' => 'customer.'], function(){
    Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria');
    Route::get('/kriteria/create', [KriteriaController::class, 'create'])->name('kriteria.create');
    Route::post('/kriteria', [KriteriaController::class, 'store'])->name('kriteria.store');
    Route::get('/kriteria/{id}/edit', [KriteriaController::class, 'edit'])->name('kriteria.edit');
    Route::put('/kriteria/{id}', [KriteriaController::class, 'update'])->name('kriteria.update');
    Route::delete('/kriteria/{id}', [KriteriaController::class, 'destroy'])->name('kriteria.destroy');


    Route::get('/alternatif',[AlternatifController::class,'index'])->name('alternatif');
    Route::get('/alternatif/create',[AlternatifController::class,'create'])->name('alternatif.create');
    Route::post('/alternatif',[AlternatifController::class, 'store']) -> name('alternatif.store');
    //untuk menampilkan view edit
    Route::get('/alternatif/{id}/edit',[AlternatifController::class, 'edit']) -> name('alternatif.edit');
    //untuk update data
    Route::put('/alternatif/{id}',[AlternatifController::class, 'update']) -> name('alternatif.update');
    //untuk delete data
    Route::delete('/alternatif/{id}',[AlternatifController::class, 'destroy']) -> name('alternatif.delete');

    Route::get('/settings',[LoginController::class, 'setting']) -> name('settings');
    Route::post('/settings/password', [LoginController::class, 'updatePassword'])->name('updatePassword');


    Route::get('/comparisons', [MatriksController::class, 'index'])->name('comparisons');
    Route::post('/comparisons', [MatriksController::class, 'store'])->name('storeMatriks');
    Route::get('/hasil',[MatriksController::class,'matriks']) -> name('hasil');
    Route::get('/bobotalternatif', [HitungController::class,'showBobot'])->name('bobotalternatif');

    //Perangkingan
    Route::get('/perangkingan',[PerangkinganController::class,'index'])->name('perangkingan');

});
Route::get('/login', [LoginController::class, 'index']) -> name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses']) -> name('login-proses');
Route::get('/logout', [LoginController::class, 'logout']) -> name('logout');

Route::get('/register',[LoginController::class, 'register']) -> name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses']) -> name('register-proses');

Route::get('/',[DashboardController::class,'home'])-> name('home');

Route::get('auth/redirect',[SocialController::class,'redirect'])->name('google.redirect');
Route::get('/google/redirect',[SocialController::class, 'googleCallback'])->name('google.callback');
