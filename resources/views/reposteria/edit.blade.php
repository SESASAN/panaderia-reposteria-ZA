<x-Layout>
    <h1>Editar Produtco</h1>
    <form action="{{route('reposteria.update', $producto)}}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre', $producto->nombre)}}">
        </label>
        @error('nombre')
            <p>
                {{ $message }}
            </p>
        @enderror
        <br>
        <br>
        <label>
            Slug:
            <br>
            <input type="text" name="slug" value="{{old('slug', $producto->slug)}}">
        </label>
        @error('slug')
            <p>
                {{ $message }}
            </p>
        @enderror
        {{-- <br>
        <br>
        <div class="form-group">
            <label>Imagen Actual:</label>
            <img src="{{ asset('storage/' . $producto->imagen) }}" width="100" class="img-thumbnail mb-2">
        </div>

        <div class="form-group">
            <label>Nueva Imagen (opcional):</label>
            <input type="file" name="imagen" class="form-control-file">
        </div>
        @error('imagen')
            <p>
                {{ $message }}
            </p>
        @enderror --}}
        <br>
        <br>
        <label>Categoría:
            <select name="categoria_id">
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </label>
        @error('categoria')
            <p>
                {{ $message }}
            </p>
        @enderror
        <br>
        <br>
        <label">
            Descripcion:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="10">{{old('descripcion', $producto->descripcion)}}</textarea>
        </label>
        @error('descripcion')
            <p>
                {{ $message }}
            </p>
        @enderror
        <br>
        <br>
        <button type="submit">Actualizar Producto</button>
    </form>
</x-Layout>
