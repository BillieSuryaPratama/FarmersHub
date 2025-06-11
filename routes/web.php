<?php

use Illuminate\Support\Facades\Route;

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


use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ManajemenProdukController;
Route::get('/', function () {
    return view('LandingPage');
});


Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', function () {
    return 'Ini halaman admin';
})->middleware('auth');

Route::get('/petani/dashboard', function () {
    return 'Ini halaman petani';
})->middleware('auth');

Route::get('/konsumen/dashboard', function () {
    return 'Ini halaman konsumen';
})->middleware('auth');


//petani - manajemen produk

Route::middleware('auth')->group(function () {
    Route::get('/produk', [ManajemenProdukController::class, 'index'])->name('produk.index');
    Route::get('/produk/create', [ManajemenProdukController::class, 'create'])->name('produk.create');
    Route::post('/produk', [ManajemenProdukController::class, 'store'])->name('produk.store');
    Route::get('/produk/{id}/edit', [ManajemenProdukController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/{id}', [ManajemenProdukController::class, 'update'])->name('produk.update');
    Route::delete('/produk/{id}', [ManajemenProdukController::class, 'destroy'])->name('produk.destroy');
});

