<?php

use App\Http\Controllers\{
    HomeController,
    CategoriaController,
    ProductoController,
    ClienteController,
    PedidoController,
    DetallePedidoController
};
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/login', function () {
    return view('login');
});
// Vistas generales
Route::get('/reposteria', [ProductoController::class, 'reposteria'])->name('reposteria');
Route::get('/panaderia', [ProductoController::class, 'panaderia'])->name('panaderia');

Route::prefix('reposteria')->name('reposteria.')->group(function () {
    Route::get('/create', [ProductoController::class, 'createReposteria'])->name('create');
    Route::post('/store', [ProductoController::class, 'storeReposteria'])->name('store');

    Route::get('/{producto}', [ProductoController::class, 'showReposteria'])->name('show');
    Route::get('/{producto}/edit', [ProductoController::class, 'editReposteria'])->name('edit');
    Route::put('/{producto}', [ProductoController::class, 'updateReposteria'])->name('update');
    Route::delete('/{producto}', [ProductoController::class, 'destroyReposteria'])->name('destroy');
});


Route::prefix('panaderia')->name('panaderia.')->group(function () {
    Route::get('/create', [ProductoController::class, 'createPanaderia'])->name('create');
    Route::post('/store', [ProductoController::class, 'storePanaderia'])->name('store');

    Route::get('/{producto}', [ProductoController::class, 'showPanaderia'])->name('show');
    Route::get('/{producto}/edit', [ProductoController::class, 'editPanaderia'])->name('edit');
    Route::put('/{producto}', [ProductoController::class, 'updatePanaderia'])->name('update');
    Route::delete('/{producto}', [ProductoController::class, 'destroyPanaderia'])->name('destroy');
});
