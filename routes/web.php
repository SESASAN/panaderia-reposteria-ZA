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
Route::get('/reposteria', [ProductoController::class, 'reposteria'])
     ->name('reposteria');

Route::get('/panaderia', [ProductoController::class, 'panaderia'])
     ->name('panaderia');

// Rutas para repostería
Route::prefix('reposteria')->group(function () {
    Route::get('/create', [ProductoController::class, 'createReposteria'])->name('reposteria.create');
    Route::get('/{producto}', [ProductoController::class, 'showReposteria'])->name('reposteria.show');
    Route::get('/{producto}/edit', [ProductoController::class, 'editReposteria'])->name('reposteria.edit');
});

Route::put('/{producto}', [ProductoController::class, 'updateReposteria'])->name('reposteria.update');


// Rutas para panadería
Route::prefix('panaderia')->group(function () {
    Route::get('/create', [ProductoController::class, 'createPanaderia'])->name('panaderia.create');
    Route::get('/{producto}', [ProductoController::class, 'showPanaderia'])->name('panaderia.show');
    Route::get('/{producto}/edit', [ProductoController::class, 'editPanaderia'])->name('panaderia.edit');
});

// Store común para ambos
Route::post('/reposteria/store', [ProductoController::class, 'storeReposteria'])
     ->name('reposteria.store');

Route::post('/panaderia/store', [ProductoController::class, 'storePanaderia'])
     ->name('panaderia.store');
