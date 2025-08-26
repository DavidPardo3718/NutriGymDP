<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplementoController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para suplementos - CRUD completo
Route::prefix('suplementos')->name('suplementos.')->group(function () {
    Route::get('/', [SuplementoController::class, 'index'])->name('index');
    Route::get('/create', [SuplementoController::class, 'create'])->name('create');
    Route::post('/', [SuplementoController::class, 'store'])->name('store');
    Route::get('/{suplemento}', [SuplementoController::class, 'show'])->name('show');
    Route::get('/{suplemento}/edit', [SuplementoController::class, 'edit'])->name('edit');
    Route::put('/{suplemento}', [SuplementoController::class, 'update'])->name('update');
    Route::patch('/{suplemento}', [SuplementoController::class, 'update'])->name('update');
    Route::delete('/{suplemento}', [SuplementoController::class, 'destroy'])->name('destroy');
});
