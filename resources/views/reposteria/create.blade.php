<x-app-layout>
    <h1>Nuevo Post</h1>

    {{-- @if ($errors->any())
        <div>
            <h2>Errores</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre')}}">
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
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>

        @error('slug')
            <p>
                {{ $message }}
            </p>
        @enderror

        <br>
        <br>
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Imagen:</label>
            <input type="file" name="imagen" class="form-control-file" accept="image/png, image/jpeg" required>
        </div>
        @error('imagen')
            <p>
                {{ $message }}
            </p>
        @enderror
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
            <textarea name="descripcion" id="" cols="30" rows="10">{{old('descripcion')}}</textarea>
        </label>

        @error('descripcion')
            <p>
                {{ $message }}
            </p>
        @enderror

        <br>
        <br>
        <button type="submit">Crear Producto</button>
    </form>
</x-app-layout>
