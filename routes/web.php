<?php

use App\Http\Controllers\Masyarakat\BerkasController;
use App\Http\Controllers\Masyarakat\DashboardController;
use App\Http\Controllers\Masyarakat\LaporanController;
use App\Http\Controllers\Masyarakat\SettingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('layouts.beranda');
});

Auth::routes();

Route::middleware(['auth', 'role:0'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/beranda', function () {
        return view('menu.masyarakat.dashboard');
    });
    Route::resource('dashboard', DashboardController::class);
    Route::resource('user', SettingController::class);
    Route::resource('berkas', BerkasController::class);
});

Route::middleware(['auth', 'role:1'])->group(function () {
    Route::resource('daftar-laporan', LaporanController::class);
    Route::get('dashboard-admin', [DashboardController::class, 'indexAdmin'])->name('dashboard-admin');
});
