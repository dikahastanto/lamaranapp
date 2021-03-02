<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;

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
    return view('welcome');
})->name('landing');

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftarPage');

Route::post('/daftar', [DaftarController::class, 'store'])->name('daftarAction');

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', [DaftarController::class, 'index'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->post('dashboard/filter', [DaftarController::class, 'filtered'])->name('getByFormasi');
Route::middleware(['auth:sanctum', 'verified'])->get('detail/{id}', [DaftarController::class, 'show'])->name('detail');
