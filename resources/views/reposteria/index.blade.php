<x-Layout>
    <!-- Título de la página -->
    <div class="bg-[#FFF7EB] py-6 px-4 text-center">
        <h1 class="text-4xl font-bold text-gray-800">Repostería</h1>
    </div>

    <!-- Botón para crear un nuevo producto -->
    <div class="flex justify-center mt-6">
        <a
            href="{{route('reposteria.create')}}"
            class="bg-red-600 text-white py-2 px-4 rounded-lg text-sm font-semibold shadow hover:bg-red-700 transition duration-300"
        >
            Nuevo producto
        </a>
    </div>

    <!-- Lista de productos -->
    <div class="max-w-4xl mx-auto mt-10 bg-white shadow-lg rounded-lg p-6 mb-10"> <!-- Aquí está el margen inferior -->
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Nuestros productos</h2>
        <ul class="space-y-4">
            @foreach ($productos as $producto)
                @if ($producto->categoria_id == 2)
                    <li class="flex items-center justify-between bg-gray-100 p-4 rounded-lg shadow">
                        <a
                            href="{{route('reposteria.show', $producto)}}"
                            class="text-lg font-medium text-gray-800 hover:text-red-600 transition duration-300"
                        >
                            {{ $producto->nombre }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>

    <!-- Paginación (comentada) -->
    {{--
    <div class="mt-6 flex justify-center">
        {{ $posts->links() }}
    </div>
    --}}
</x-Layout>
