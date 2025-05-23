<x-Layout>
    <!-- Encabezado -->
    <div class="header">
        <h1>Producto</h1>
        <div class="volver">
            <a href="/">Volver</a>
        </div>
    </div>

    <div class="container">
        <h2>Nombre: {{ $producto->nombre }}</h2>
        <p class="description">{{ $producto->descripcion }}</p>
        <div class="img-container">
            <img src="{{ asset('images/--nombre--') }}" alt="Imagen del producto" />
        </div>
        <p class="price">Precio: ${{ $producto->precio }}</p>
    </div>

    <form action="{{ route('pedido.store',$producto) }}" method="POST" class="container">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Ingresa tu email" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Ingresa tu teléfono" required>

        <label for="fecha_entrega">Fecha:</label>
        <input type="date" id="fecha_entrega" name="fecha_entrega" required>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" placeholder="Ingresa tu dirección" required>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" min="1" name="cantidad" placeholder="Ingresa la cantidad" required>

        <label for="total">Total:</label>
        <input type="text" id="total" name="total" readonly>

        <input type="hidden" name="producto_id" value="{{ $producto->id }}">
        <input type="hidden" name="precio_unitario" value="{{ $producto->precio }}">

        <button type="submit">Realizar Pedido</button>
    </form>
</x-Layout>

<style>
    body {
    font-family: 'Merriweather', serif;
    background-color: #f5e7d3;
    margin: 0;
    padding: 0;
    color: #4b3621;
}

/* Encabezado */
.header {
    background-color: #fff7eb;
    padding: 30px 20px;
    text-align: center;
    position: relative;
    border-bottom: 2px solid #d6c0a0;
}

.header h1 {
    font-size: 36px;
    font-weight: bold;
    margin: 0;
    color: #4b3621;
}

.volver {
    position: absolute;
    top: 20px;
    left: 20px;
}

.volver a {
    color: #c0392b;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
}

.volver a:hover {
    color: #a93226;
}

/* Contenedor principal */
.container {
    max-width: 700px;
    margin: 40px auto;
    background-color: #ffffff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    box-sizing: border-box;
}

/* Nombre del producto */
.container h2 {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 15px;
}

/* Descripción */
.description {
    font-size: 18px;
    color: #5a4b3c;
    margin-bottom: 20px;
}

/* Imagen */
.img-container {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.img-container img {
    max-width: 250px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

/* Precio */
.price {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 30px;
}

/* Inputs */
form label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    margin-top: 16px;
}

form input {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 10px;
    border: 2px solid #8b5e34;
    border-radius: 6px;
    background-color: #f5e3cf;
    font-family: 'Merriweather', serif;
    font-size: 14px;
    box-sizing: border-box;
    color: #4b3621;
}

form input:focus {
    border-color: #6b3e26;
    outline: none;
    background-color: #f2d7b6;
}

/* Botón */
form button {
    background-color: #8b5e34;
    color: #ffffff;
    border: none;
    padding: 12px 20px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    margin-top: 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form button:hover {
    background-color: #6b3e26;
}
</style>

<script>
const precio = {{ $producto->precio }};
document.getElementById('cantidad').addEventListener('input', function () {
    const cantidad = parseInt(this.value) || 0;
    document.getElementById('total').value = (cantidad * precio).toFixed(2);
});
</script>
