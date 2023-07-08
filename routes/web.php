<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\RelawanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DashboardRelawanController;
use App\Http\Controllers\DashboardPermohonanController;
use App\Http\Controllers\DashboardPendaftaranController;
use App\Http\Controllers\DashboardDocumentationController;


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

Route::get('/', [HomeController::class, 'index']);

Route::controller(PermohonanController::class)->group(function() {
    Route::get('/form', 'index');
    Route::post('/form', 'store');
});

Route::controller(PendaftaranController::class)->group(function() {
    Route::get('/formrelawan', 'index');
    Route::post('/formrelawan', 'store');
});

Route::controller(RelawanController::class)->group(function() {
    Route::get('/relawan', 'index');
    Route::get('relawan/{slug}', 'show');
    Route::get('/lokasi/{lokasi:kabupaten}', 'lokasi');
});

Route::controller(LoginController::class)->group(function() {
    Route::get('/admin', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/calender', [DashboardController::class, 'calender']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [DashboardController::class, 'profile']);

    Route::post('/exportpdf/{id}', [ExportController::class, 'pemohon']);

    Route::resource('/dashrelawan', DashboardRelawanController::class);

    Route::resource('permohonan', DashboardPermohonanController::class);

    Route::resource('pendaftaran', DashboardPendaftaranController::class);
    
    Route::resource('dokumentasi', DashboardDocumentationController::class);
});