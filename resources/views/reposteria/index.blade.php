<x-Layout>
    <h1 class="text-3xl">Repostería</h1>

    <a href="{{route('reposteria.create')}}">Nuevo prodcuto</a>
    <ul>
        @foreach ($productos as $producto)
            @if ($producto->categoria_id == 2)
                <li>
                    <a href="{{route('reposteria.show', $producto)}}">
                        {{ $producto->nombre }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>

    {{-- <div>
        {{ $posts->links() }}
    </div> --}}
</x-Layout>
