<x-Layout>
    <a href="{{route('reposteria')}}">Volver</a>
    <h1>Nombre: {{$producto->nombre}}</h1>
    <p>
        {{$producto->descripcion}}
    </p>
    <img src="{{ asset('images/--nombre--') }}" alt="Imagen del producto" width="200">
    <p>
        Precio: {{$producto->precio}}$
    </p>
    <a href="{{route('reposteria.edit', $producto)}}">
        Editar Producto
    </a>

    {{-- {{route('reposteria.destroy', $producto)}} --}}
    <form action="" method="POST">
        {{-- @csrf
        @method('DELETE') --}}
        <button type="submit">
            Eliminar Producto
        </button>
    </form>
</x-Layout>
