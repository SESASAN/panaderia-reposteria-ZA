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

.btn{
    display: inline-block;
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
    <select name="menu" id="categoriaSelect">
        <option value="panaderia">Panadería</option>
        <option value="reposteria">Repostería</option>
    </select>
    </div>

    <div id="productosContainer">
    {{-- Aquí van los productos inicialmente cargados --}}
    <div class="productos" id="contenedor-productos">
    @include('partials.productos', ['productos' => $productosPanaderia])

    </div>

</div>
</x-Layout>

<script>
document.getElementById('categoriaSelect').addEventListener('change', function () {
    const categoria = this.value;

    fetch(`/productos/categoria/${categoria}`)
        .then(response => response.text())
        .then(html => {
            document.getElementById('productosContainer').innerHTML = html;
        })
        .catch(error => {
            console.error('Error cargando productos:', error);
        });
});
</script>
