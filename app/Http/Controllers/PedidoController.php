<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePedidoRequest;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\DetallePedido;
use App\Models\Producto;
use Illuminate\Http\Request;

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

    public function store(Request $request, Producto $producto)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
            'fecha_entrega' => 'required|date|after_or_equal:today',
            'cantidad' => 'required|integer|min:1',
            'producto_id' => 'required|exists:productos,id',
            'precio_unitario' => 'required|numeric|min:0',
        ]);

        // Verificar si el cliente ya existe por email
        $cliente = Cliente::firstOrCreate(
            ['email' => strtolower($validated['email'])],
            [
                'nombre' => $validated['nombre'],
                'telefono' => $validated['telefono'],
                'direccion' => $validated['direccion'],
            ]
        );

        // Calcular el total
        $total = $validated['cantidad'] * $validated['precio_unitario'];

        // Crear el pedido
        $pedido = Pedido::create([
            'cliente_id' => $cliente->id,
            'fecha_entrega' => $validated['fecha_entrega'],
            'estado' => 'pendiente', // o el estado inicial que uses
            'total' => $total,
            'metodo_pago' => 'efectivo', // o lo que manejes
        ]);

        // Crear detalle del pedido
        DetallePedido::create([
            'pedido_id' => $pedido->id,
            'producto_id' => $producto->id,
            'cantidad' => $validated['cantidad'],
            'precio_unitario' => $validated['precio_unitario'],
        ]);

        return redirect()->route('productos.show', $producto->slug)
            ->with('success', 'Tu pedido ha sido realizado con éxito');
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
