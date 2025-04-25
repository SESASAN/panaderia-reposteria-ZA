<x-Layout>
    <!-- Encabezado -->
    <div class="bg-[#FFF7EB] py-6 px-4 text-center">
        <h1 class="text-4xl font-bold text-gray-800">Editar Producto</h1>
    </div>

    <!-- Formulario -->
    <div class="w-full max-w-250 mx-auto mt-10 bg-white shadow-lg rounded-lg p-6 mb-10"> <!-- Clases ajustadas -->
        <form action="{{ route('reposteria.update', $producto) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Campo Nombre -->
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input 
                    type="text" 
                    name="nombre" 
                    id="nombre" 
                    value="{{ old('nombre', $producto->nombre) }}" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                />
                @error('nombre')
                    <p class="text-red-600 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Campo Slug -->
            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input 
                    type="text" 
                    name="slug" 
                    id="slug" 
                    value="{{ old('slug', $producto->slug) }}" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                />
                @error('slug')
                    <p class="text-red-600 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Campo Categoría -->
            <div>
                <label for="categoria_id" class="block text-sm font-medium text-gray-700">Categoría</label>
                <select 
                    name="categoria_id" 
                    id="categoria_id" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                >
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $categoria->id == $producto->categoria_id ? 'selected' : '' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('categoria_id')
                    <p class="text-red-600 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Campo Descripción -->
            <div>
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea 
                    name="descripcion" 
                    id="descripcion" 
                    rows="4" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                >{{ old('descripcion', $producto->descripcion) }}</textarea>
                @error('descripcion')
                    <p class="text-red-600 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Botón de envío -->
            <div class="flex justify-end">
                <button 
                    type="submit" 
                    class="bg-red-600 text-white py-2 px-4 rounded-lg text-sm font-semibold shadow hover:bg-red-700 transition duration-300"
                >
                    Actualizar Producto
                </button>
            </div>
        </form>
    </div>
</x-Layout>