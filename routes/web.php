<?php

use App\Http\Controllers\BatikController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'indexHome'])->name('homePage');
Route::get('/jenis', [PageController::class, 'indexJenis'])->name('jenisPage');
Route::get('/tentang', [PageController::class, 'indexTentang'])->name('tentangPage');


// dashboard
Route::get('/dashboard', [BatikController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/create', [BatikController::class, 'create'])->name('dashboard.create');
Route::post('/dashboard', [BatikController::class, 'store'])->name('dashboard.store');
Route::get('/dashboard/{batik}/edit', [BatikController::class, 'edit'])->name('dashboard.edit');
Route::put('/dashboard/{batik}', [BatikController::class, 'update'])->name('dashboard.update');
Route::delete('/dashboard/{batik}', [BatikController::class, 'destroy'])->name('dashboard.destroy');