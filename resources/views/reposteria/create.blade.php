<x-Layout>
    <!-- Encabezado -->
    <div class="py-6 px-max text-center">
        <h1 class="text-4xl font-bold text-gray-800">Nuevo Producto</h1>
        <h2 class="text-2xl font-bold text-gray-800">Repostería</h2>
    </div>

    <!-- Formulario -->
    <div class="w-[96%] max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg p-6 mb-10">
        {{-- Validación de errores (descomentable) --}}

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <h2 class="font-bold">Errores:</h2>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


<form action="{{ route('reposteria.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
            <!-- Campo Nombre -->
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input
                    type="text"
                    name="nombre"
                    id="nombre"
                    value="{{ old('nombre') }}"
                    placeholder="Ingrese el nombre del producto"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                />
                @error('nombre')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Campo Slug -->
            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input
                    type="text"
                    name="slug"
                    id="slug"
                    value="{{ old('slug') }}"
                    placeholder="Ingrese el slug del producto"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                />
                @error('slug')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Campo Descripción -->
            <div>
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea
                    name="descripcion"
                    id="descripcion"
                    rows="4"
                    placeholder="Ingrese una descripción del producto"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                >{{ old('descripcion') }}</textarea>
                @error('descripcion')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Campo Precio -->
            <div>
                <label for="precio" class="block text-sm font-medium text-gray-700">Precio</label>
                <input
                    type="number"
                    name="precio"
                    id="precio"
                    value="{{ old('precio') }}"
                    placeholder="Ingrese el precio del producto"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
                />
                @error('precio')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
<!-- Campo Imagen -->
<div>
    <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen</label>
    <input
        type="file"
        name="imagen"
        id="imagen"
        accept="image/*"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 sm:text-sm"
    />
    @error('imagen')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
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
                    <option value="">Selecciona una categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
                @error('categoria_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Botón de envío -->
            <div class="flex justify-end">
                <button
                    type="submit"
                    class="bg-red-600 text-white py-2 px-4 rounded-lg text-sm font-semibold shadow hover:bg-red-700 transition duration-300"
                >
                    Crear Producto
                </button>
            </div>
        </form>
    </div>
</x-Layout>
