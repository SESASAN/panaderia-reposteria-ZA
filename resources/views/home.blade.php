<x-Layout>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <section>
        <h2 class="titulo-productos">Nuevos productos</h2>
        <div class="productos">
    <div class="producto">
        <img src="{{ asset('images/tortadeleche.jpg') }}" alt="Producto 1">
        <h3 class="titulo_tarjeta">Torta de leche asada</h3>
        <p class="precio">$24000</p>
        <button class="comprar">Compra ahora!</button>
    </div>

    <div class="producto">
        <img src="{{ asset('images/tortadeleche.jpg') }}" alt="Producto 2">
        <h3 class="titulo_tarjeta">Torta de leche asada</h3>
        <p class="precio">$24000</p>
        <button class="comprar">Compra ahora!</button>
    </div>

    <div class="producto">
        <img src="{{ asset('images/tortadeleche.jpg') }}" alt="Producto 3">
        <h3 class="titulo_tarjeta">Torta de leche asada</h3>
        <p class="precio">$24000</p>
        <button class="comprar">Compra ahora!</button>
    </div>
</div>
<style>

.titulo-productos {
    text-align: center;
    font-family: 'Merriweather', serif;
    font-size: 40px;
    font-weight: bold;
    color: #6b3e26; /* opcional: tono marrón cálido */
}

.productos {
    background-color: #f5e3cf; /* Fondo claro */
    padding: 10px 0; /* Espaciado arriba y abajo */
    width: 100%; /* Ocupar todo el ancho de la página */
    display: flex;
    justify-content: center; /* Centra los productos en la página */
    gap: 20px; /* Espaciado entre tarjetas */
}

.producto {
    background-color: white; /* Fondo blanco para cada tarjeta */
    padding: 20px;
    border-radius: 10px; /* Bordes curvos */
    text-align: center;
    width: 250px; /* Tamaño fijo de cada tarjeta */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Sombra elegante */
}

.producto img {
    width: 100%;
    height: 250px;
    border-radius: 10px; /* Bordes curvos para la imagen */
}

.titulo_tarjeta{
font-size: 18px;
    color: #4b3621; /* Color café */
    margin: 10px 0;
}

.precio {
    font-size: 18px;
    color: #4b3621; /* Color café */
    font-weight: bold;
    margin: 10px 0;
}

.comprar{
    background-color: #8b5e34; /* Botón en color café */
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
</style>
    </section>
    <div class="opciones">
        <select name="menu">
        <option>Panadería</option>
        <option>Repostería</option>
        </select>
    </div>

    <!-- <section class="bg-[#F5E7D3] p-8">
        <h2 class="text-center text-2xl font-bold mb-4">Contacto</h2>
        <form class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
            <label for="nombre" class="block font-bold mb-2">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required class="w-full p-2 border border-gray-300 rounded-md mb-4">

            <label for="email" class="block font-bold mb-2">Email:</label>
            <input type="email" id="email" name="email" required class="w-full p-2 border border-gray-300 rounded-md mb-4">

            <label for="mensaje" class="block font-bold mb-2">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required class="w-full p-2 border border-gray-300 rounded-md mb-4"></textarea>

            <button type="submit" class="bg-[#EF4444] text-white py-2 rounded-md w-full">Enviar</button>
        </form>
    </section> -->

    <!-- <section class="w-full bg-cover bg-center p-8 text-white relative" style="background-image: url('{{ asset('images/panaderiaIA.png') }}'); height: 400px;">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 text-center">
            <h2 class="text-2xl font-bold mb-2">¿Trabajas con nosotros?</h2>
            <p class="mb-4">Ingresa a la plataforma de empleados mediante el siguiente botón:</p>
            <a href="/login">
                <button class="bg-[#2563EB] text-white py-2 rounded-md">Iniciar sesión</button>
            </a>
        </div>
    </section> -->
</x-Layout>
