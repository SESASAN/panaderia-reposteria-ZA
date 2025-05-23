<x-Layout>
    <!-- Encabezado -->
    <div class="bg-[#FFF7EB] py-6 px-4 relative">
        <h1 class="text-4xl font-bold text-gray-800 text-center">Producto</h1>

        <!-- Botón "Volver" en el fondo beige -->
        <div class="top-4">
            <a
                href="/"
                class="text-red-600 hover:text-red-700 font-medium text-sm"
            >
                Volver
            </a>
        </div>
    </div>

    <!-- Contenedor principal -->
    <div class="max-w-3xl mx-auto mt-10 bg-white shadow-lg rounded-lg p-6 mb-6">
        <!-- Información del producto -->
        <div class="space-y-6">
            <h2 class="text-3xl font-bold text-gray-800">Nombre: {{ $producto->nombre }}</h2>
            <p class="text-gray-600 text-lg">
                {{ $producto->descripcion }}
            </p>
            <div class="flex justify-center">
                <img
                    src="{{ asset('images/--nombre--') }}"
                    alt="Imagen del producto"
                    class="w-64 h-auto rounded-lg shadow-md"
                />
            </div>
            <p class="text-gray-800 font-semibold text-xl">
                Precio: ${{ $producto->precio }}
            </p>
        </div>
    </div>

    <div>
        <form action="{{ route('pedido.store',$producto) }}" method="POST" class="max-w-3xl mx-auto mt-10 bg-white shadow-lg rounded-lg p-6 mb-6">
            @csrf 
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu email" required>
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Ingresa tu teléfono" required>
            <label for="fecha_entrega">Fecha:</label>
            <input type="date" id="fecha_entrega" name="fecha_entrega" required>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" placeholder="Ingresa tu dirección" required>
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" min="1" name="cantidad" placeholder="Ingresa la cantidad" required>
            <label for="total">Total:</label>
            <input type="text" id="total" name="total" readonly>

            <input type="hidden" name="producto_id" value="{{ $producto->id }}">
            <input type="hidden" name="precio_unitario" value="{{ $producto->precio }}">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg text-sm font-semibold shadow hover:bg-blue-600 transition duration-300">
                Realizar Pedido
            </button>
        </form>
    </div>
</x-Layout>

<script>
const precio = {{ $producto->precio }};
document.getElementById('cantidad').addEventListener('input', function () {
    const cantidad = parseInt(this.value) || 0;
    document.getElementById('total').value = (cantidad * precio).toFixed(2);
});
</script>
