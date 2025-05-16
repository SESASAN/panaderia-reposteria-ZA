<x-Layout>
    <!-- Encabezado -->
    <div class="bg-[#FFF7EB] py-6 px-4 relative">
        <h1 class="text-4xl font-bold text-gray-800 text-center">Producto</h1>

        <!-- Botón "Volver" en el fondo beige -->
        <div class="top-4">
            <a
                href="{{route('reposteria')}}"
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

        <!-- Acciones del producto -->
        <div class="mt-8 flex justify-between items-center space-x-4">
            <a
                href="{{route('reposteria.edit', $producto)}}"
                class="bg-yellow-500 text-white py-2 px-4 rounded-lg text-sm font-semibold shadow hover:bg-yellow-600 transition duration-300"
            >
                Editar Producto
            </a>

            <form action="{{route('reposteria.destroy', $producto)}}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button
                    type="submit"
                    class="bg-red-600 text-white py-2 px-4 rounded-lg text-sm font-semibold shadow hover:bg-red-700 transition duration-300"
                >
                    Eliminar Producto
                </button>
            </form>
        </div>
    </div>
</x-Layout>
