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
            Título:
            <br>
            <input type="text" name="title" value="{{old('title')}}">
        </label>

        @error('title')
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
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error('categoria')
            <p>
                {{ $message }}
            </p>
        @enderror

        <br>
        <br>
        <label">
            Contenido:
            <br>
            <textarea name="content" id="" cols="30" rows="10">{{old('content')}}</textarea>
        </label>

        @error('content')
            <p>
                {{ $message }}
            </p>
        @enderror

        <br>
        <br>
        <button type="submit">Crear Post</button>
    </form>
</x-app-layout>
