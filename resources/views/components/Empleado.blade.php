@auth
    <p>Bienvenido, {{ Auth::user()->nombre }}</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
@endauth


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Panadería y Repostería - Zhandra Araujo</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logoconnegro.png') }}">
</head>

{{-- Se agrega el header --}}
<x-HdEmpleado />

<body class="flex flex-col min-h-screen bg-[#F5E7D3]">
    <main class="flex-1 flex flex-col justify-center items-center p-4">
        {{-- El slot es donde se va a cargar el contenido de cada vista --}}
        {{ $slot }}
    </main>
</body>

{{-- Se agrega el footer --}}
<x-Footer />

</html>
