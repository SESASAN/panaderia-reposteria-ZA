<x-Layout>
    <section class="bg-[#FFF7EB] p-8">
        <h2 class="text-center text-2xl font-bold mb-4">Nuevos productos</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <!-- Producto 1 -->
            <div class="bg-white p-4 rounded-lg text-center shadow-md">
                <img src="{{ asset('images/tortadeleche.jpg') }}" alt="Torta de leche asada" class="w-3/4 rounded-lg mx-auto">
                <h3 class="text-xl font-bold my-2">Torta de leche asada</h3>
                <p class="text-gray-600">24.000$</p>
                <button class="bg-[#EC4899] text-white py-2 rounded-md w-full mt-2">Agregar al carrito</button>
            </div>
            <!-- Producto 2 -->
            <div class="bg-white p-4 rounded-lg text-center shadow-md">
                <img src="{{ asset('images/roll.jpg') }}" alt="Roll" class="w-3/4 rounded-lg mx-auto">
                <h3 class="text-xl font-bold my-2">Roll</h3>
                <p class="text-gray-600">4.000$</p>
                <button class="bg-[#EC4899] text-white py-2 rounded-md w-full mt-2">Agregar al carrito</button>
            </div>
            <!-- Producto 3 -->
            <div class="bg-white p-4 rounded-lg text-center shadow-md">
                <img src="{{ asset('images/dulcealfajor.jpg') }}" alt="Dulce Alfajor" class="w-3/4 rounded-lg mx-auto">
                <h3 class="text-xl font-bold my-2">Dulce Alfajor</h3>
                <p class="text-gray-600">6.000$</p>
                <button class="bg-[#EC4899] text-white py-2 rounded-md w-full mt-2">Agregar al carrito</button>
            </div>
        </div>
    </section>

    <section class="bg-[#F5E7D3] p-8">
        <h2 class="text-center text-2xl font-bold mb-4">Contacto</h2>
        <form class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
            <label for="nombre" class="block font-bold mb-2">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="w-full p-2 border border-gray-300 rounded-md mb-4">

            <label for="email" class="block font-bold mb-2">Email:</label>
            <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md mb-4">

            <label for="mensaje" class="block font-bold mb-2">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" class="w-full p-2 border border-gray-300 rounded-md mb-4"></textarea>

            <button type="submit" class="bg-[#EF4444] text-white py-2 rounded-md w-full">Enviar</button>
        </form>
    </section>

    <section class="bg-cover bg-center p-8 text-white relative" style="background-image: url('{{ asset('images/panaderiaIA.png') }}'); height: 400px;">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 text-center">
            <h2 class="text-2xl font-bold mb-2">¿Trabajas con nosotros?</h2>
            <p class="mb-4">Ingresa a la plataforma de empleados mediante el siguiente botón:</p>
            <a href="/login">
                <button class="bg-[#2563EB] text-white py-2 rounded-md">Iniciar sesión</button>
            </a>
        </div>
    </section>
</x-Layout>
