<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/laporan', [App\Http\Controllers\LaporanController::class, 'index'])->name('laporan');
Route::get('/laporan/create', [App\Http\Controllers\LaporanController::class, 'create'])->name('laporan.create');
Route::get('/laporan/show/{id}', [App\Http\Controllers\LaporanController::class, 'show'])->name('laporan.show');
Route::get('/laporan/delete/{id}', [App\Http\Controllers\LaporanController::class, 'delete'])->name('laporan.delete');
Route::get('/laporan/show/export/{id}', [App\Http\Controllers\LaporanController::class, 'exportpdf'])->name('laporan.exportpdf');
Route::post('/laporan', [App\Http\Controllers\LaporanController::class, 'store'])->name('laporan.store');
Route::get('/laporan/export', [App\Http\Controllers\LaporanController::class, 'export'])->name('laporan.export');
