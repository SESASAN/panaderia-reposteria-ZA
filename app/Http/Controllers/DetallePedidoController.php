<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDetallePedidoRequest;
use App\Models\DetallePedido;
use App\Models\Pedido;
use App\Models\Producto;

class DetallePedidoController extends Controller
{
    public function index()
    {
        $detalles = DetallePedido::with(['pedido', 'producto'])
                    ->orderBy('id', 'desc')
                    ->paginate(10);

        return view('detalles_pedido.index', compact('detalles'));
    }

    public function create()
    {
        $pedidos = Pedido::all();
        $productos = Producto::all();
        return view('detalles_pedido.create', compact('pedidos', 'productos'));
    }

    public function store(StoreDetallePedidoRequest $request)
    {
        DetallePedido::create($request->all());
        return redirect()->route('detalles_pedido.index');
    }

    public function show(DetallePedido $detallePedido)
    {
        return view('detalles_pedido.show', compact('detallePedido'));
    }

    public function edit(DetallePedido $detallePedido)
    {
        $pedidos = Pedido::all();
        $productos = Producto::all();
        return view('detalles_pedido.edit', compact('detallePedido', 'pedidos', 'productos'));
    }

    public function update(StoreDetallePedidoRequest $request, DetallePedido $detallePedido)
    {
        $detallePedido->update($request->all());
        return redirect()->route('detalles_pedido.index');
    }

    public function destroy(DetallePedido $detallePedido)
    {
        $detallePedido->delete();
        return redirect()->route('detalles_pedido.index');
    }
}
