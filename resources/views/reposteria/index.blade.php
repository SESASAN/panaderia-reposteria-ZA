<x-app-layout>
    <h1 class="text-3xl">Repostería</h1>

    <a href="{{route('productos.create')}}">Nuevo prodcuto</a>
    <ul>
        @foreach ($prodcutos as $producto)
            @if ($producto->categoria == 2)
                <li>
                    <a href="{{route('productos.show', $producto)}}">
                        {{ $producto->Nombre }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>

    {{-- <div>
        {{ $posts->links() }}
    </div> --}}
</x-app-layout>
