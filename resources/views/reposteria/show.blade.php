<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | {{$producto}}</title>
</head>
<body>
    <a href="{{route('productos.index')}}">Volver</a>
    <h1>Nombre: {{$producto->Nombre}}</h1>
    <p>
        {{$producto->Descripcion}}
    </p>
    <p>
        Precio: {{$producto->Precio}}$
    </p>
    <a href="{{route('productos.edit', $producto)}}">
        Editar Producto
    </a>

    <form action="{{route('productos.destroy', $producto)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            Eliminar Producto
        </button>
    </form>
</body>
</html>
