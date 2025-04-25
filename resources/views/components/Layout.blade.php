<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laravel 11</title>

</head>

{{-- Se agrega el header --}}
<x-Header />

<body class="flex flex-col min-h-screen bg-[#F5E7D3]">
    <main class="flex-1 flex justify-center items-center">
    </main>
    {{-- El slot es donde se va a cargar el contenido de cada vista --}}
    {{ $slot }}
</body>

{{-- Se agrega el footer --}}
<x-Footer />

</html>

<style>
    
</style>
