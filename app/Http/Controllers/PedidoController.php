<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePedidoRequest;
use App\Models\Pedido;
use App\Models\Cliente;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::with('cliente')
                ->orderBy('id', 'desc')
                ->paginate(10);

        return view('pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('pedidos.create', compact('clientes'));
    }

    public function store(StorePedidoRequest $request)
    {
        Pedido::create($request->all());
        return redirect()->route('pedidos.index');
    }

    public function show(Pedido $pedido)
    {
        return view('pedidos.show', compact('pedido'));
    }

    public function edit(Pedido $pedido)
    {
        $clientes = Cliente::all();
        return view('pedidos.edit', compact('pedido', 'clientes'));
    }

    public function update(StorePedidoRequest $request, Pedido $pedido)
    {
        $pedido->update($request->all());
        return redirect()->route('pedidos.index');
    }

    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect()->route('pedidos.index');
    }
}
