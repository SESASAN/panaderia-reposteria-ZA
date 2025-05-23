<x-Empleado>
    <h1 class="text-2xl font-bold mb-4">Pedidos</h1>

    <table class="min-w-full bg-white border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 border">Cliente</th>
                <th class="px-4 py-2 border">Producto</th>
                <th class="px-4 py-2 border">Fecha de Entrega</th>
                <th class="px-4 py-2 border">Dirección</th>
                <th class="px-4 py-2 border">Cantidad</th>
                <th class="px-4 py-2 border">Total</th>
                <th class="px-4 py-2 border">Estado</th>
                <th class="px-4 py-2 border">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
                @php $detalle = $pedido->detalles->first(); @endphp
                <tr>
                    <td class="px-4 py-2 border">{{ $pedido->cliente->nombre }}</td>
                    <td class="px-4 py-2 border">{{ $detalle->producto->nombre ?? 'N/A' }}</td>
                    <td class="px-4 py-2 border">{{ $pedido->fecha_entrega }}</td>
                    <td class="px-4 py-2 border">{{ $pedido->direccion_entrega }}</td>
                    <td class="px-4 py-2 border">{{ $detalle->cantidad }}</td>
                    <td class="px-4 py-2 border">${{ number_format($pedido->total, 2) }}</td>
                    <td class="px-4 py-2 border">{{ $pedido->estado }}</td>
                    <td class="px-4 py-2 border space-x-2">
                        @if($pedido->estado === 'pendiente')
                            <form action="{{ route('pedidos.aceptar', $pedido->id) }}" method="POST" class="inline">
                                @csrf @method('PUT')
                                <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded text-sm">
                                    Aceptar
                                </button>
                            </form>
                            <form action="{{ route('pedidos.rechazar', $pedido->id) }}" method="POST" class="inline">
                                @csrf @method('PUT')
                                <button type="submit" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                    Rechazar
                                </button>
                            </form>
                        @elseif($pedido->estado === 'rechazado')
                            <form action="{{ route('pedidos.aceptar', $pedido->id) }}" method="POST" class="inline">
                                @csrf @method('PUT')
                                <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded text-sm">
                                    Aceptar
                                </button>
                            </form>
                            <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded text-sm">
                                    Eliminar
                                </button>
                            </form>
                        @else
                            <span class="text-gray-600">Sin acciones</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-Empleado>
