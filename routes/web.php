<?php

use App\Http\Controllers\{
    HomeController,
    CategoriaController,
    ProductoController,
    ClienteController,
    PedidoController,
    DetallePedidoController,
    LoginController,
};
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/dashboard', function () {
    return view('empleados.dashboard');
})->middleware('auth')->name('dashboard');


Route::get('/productos/categoria/{categoria}', [ProductoController::class, 'filtrarPorCategoria']);

Route::get('/login', function() {
    return redirect('/');
});
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Vistas generales
Route::get('/reposteria', [ProductoController::class, 'reposteria'])->name('reposteria')->middleware('auth');
Route::get('/panaderia', [ProductoController::class, 'panaderia'])->name('panaderia')->middleware('auth');

Route::prefix('reposteria')->name('reposteria.')->group(function () {
    Route::get('/create', [ProductoController::class, 'createReposteria'])->name('create')->middleware('auth');
    Route::post('/store', [ProductoController::class, 'storeReposteria'])->name('store')->middleware('auth');
    Route::get('/{producto}', [ProductoController::class, 'showReposteria'])->name('show');
    Route::get('/{producto}/edit', [ProductoController::class, 'editReposteria'])->name('edit')->middleware('auth');
    Route::put('/{producto}', [ProductoController::class, 'updateReposteria'])->name('update')->middleware('auth');
    Route::delete('/{producto}', [ProductoController::class, 'destroyReposteria'])->name('destroy')->middleware('auth');
});


Route::prefix('panaderia')->name('panaderia.')->group(function () {
    Route::get('/create', [ProductoController::class, 'createPanaderia'])->name('create')->middleware('auth');
    Route::post('/store', [ProductoController::class, 'storePanaderia'])->name('store')->middleware('auth');
    Route::get('/{producto}', [ProductoController::class, 'showPanaderia'])->name('show');
    Route::get('/{producto}/edit', [ProductoController::class, 'editPanaderia'])->name('edit')->middleware('auth');
    Route::put('/{producto}', [ProductoController::class, 'updatePanaderia'])->name('update')->middleware('auth');
    Route::delete('/{producto}', [ProductoController::class, 'destroyPanaderia'])->name('destroy')->middleware('auth');
});

Route::post('/productos/{producto}/pedido', [PedidoController::class, 'store'])->name('pedido.store');
