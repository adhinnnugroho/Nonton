<?php

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Film\FilmController;
use App\Http\Controllers\Layanan\Product\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users as userController;

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
    return redirect()->to('/login');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::name('layanan')->prefix('layanan')->group(function () {
    Route::get('produk', [ProductController::class, 'index'])->name('.produk');
});

Route::name('nonton')->prefix('nonton')->group(function () {
    Route::get('film', [FilmController::class, 'index'])->name('.film');
});

Route::name('profile-setting.')->prefix('profile-setting')->group(function () {
    Route::get('/', [userController\ProfileController::class, 'index'])->name('index');
    Route::get('/edit', [userController\ProfileController::class, 'edit'])->name('edit');
});

Route::name('google.')->prefix('google')->group(function () {
    Route::get('/', [GoogleController::class, 'redirectToGoogle'])->name('index');
    Route::get('/callback', [GoogleController::class, 'Handlecallback'])->name('callback');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
