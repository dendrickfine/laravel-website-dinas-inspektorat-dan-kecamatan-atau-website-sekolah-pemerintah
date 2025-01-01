<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\WbsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

// Public routes
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::get('/', [FrontendController::class, 'index']);
Route::post('/artikel/pencarian', [FrontendController::class, 'index'])->name('pencarian');
Route::get('/detail-artikel/{slug}', [FrontendController::class, 'detail'])->name('detail-artikel');
Route::get('kategori/{slug}', [FrontendController::class, 'kategori'])->name('kategori');

// Rute publik untuk membuat pengaduan dan WBS
Route::get('/pengaduan/create', [PengaduanController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan/store', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/wbs/create', [WbsController::class, 'create'])->name('wbs.create');
Route::post('/wbs/store', [WbsController::class, 'store'])->name('wbs.store');

// Auth routes
Auth::routes();
Route::get('/kerja-nyata-kab-bekasi-pro', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/kerja-nyata-kab-bekasi-pro', [LoginController::class, 'login'])->name('login');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register');
// Redirect if accessing /login or /register directly
Route::get('/login', function () {
    return redirect('/');
});
Route::get('/register', function () {
    return redirect('/');
});


// Protected routes (requires login)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('kategori', KategoriController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('playlist', PlaylistController::class);
    Route::resource('materi', MateriController::class);
    Route::resource('slide', SlideController::class);
    Route::resource('iklan', IklanController::class);
    Route::resource('pengaduan', PengaduanController::class)->except(['create', 'store']);
    Route::resource('wbs', WbsController::class)->except(['create', 'store']);

    // Additional routes for deleting and viewing details of pengaduan and WBS
    Route::delete('/wbs/{id}', [WbsController::class, 'destroy'])->name('wbs.destroy');
    Route::delete('/pengaduan/{id}', [PengaduanController::class, 'destroy'])->name('pengaduan.destroy');
    Route::get('/pengaduan/{id}/detail-pengaduan', [PengaduanController::class, 'detail'])->name('pengaduan.detail-pengaduan');
    Route::get('/wbs/{id}/detail-wbs', [WbsController::class, 'detail'])->name('wbs.detail-wbs');
    // Rute untuk form registrasi
    Route::get('/dedrickwengerjagopengenjadipembalab', function () {
        return view('auth.register');
    });
    Route::post('register', [RegisterController::class, 'register'])->name('register');

});

Route::middleware('auth')->group(function () {
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
});
