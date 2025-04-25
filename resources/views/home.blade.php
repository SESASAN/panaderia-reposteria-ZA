<x-Layout>
<section style="background-color: #FFF7EB; padding: 2rem;">
    <h2 style="text-align: center; font-size: 2rem; font-weight: bold; margin-bottom: 1rem;">Nuevos productos</h2>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem;">
        <!-- Producto 1 -->
        <div style="background-color: white; padding: 1rem; border-radius: 0.5rem; text-align: center; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <img src="{{ asset('images/tortadeleche.jpg') }}" alt="Torta de leche asada" style="width: 70%; border-radius: 0.5rem;display: block; margin: 0 auto;">
            <h3 style="font-size: 1.25rem; font-weight: bold; margin: 0.5rem 0;">Torta de leche asada</h3>
            <p style="font-size: 1rem; color: gray;">24.000$</p>
            <button style="background-color: #EC4899; color: white; padding: 0.5rem; border-radius: 0.375rem; width: 100%; margin-top: 0.5rem; font-size: 1rem;">Agregar al carrito</button>
        </div>
        <!-- Producto 2 -->
        <div style="background-color: white; padding: 1rem; border-radius: 0.5rem; text-align: center; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <img src="{{ asset('images/roll.jpg') }}" alt="Torta de leche asada" style="width: 70%; border-radius: 0.5rem;display: block; margin: 0 auto;">
            <h3 style="font-size: 1.25rem; font-weight: bold; margin: 0.5rem 0;">Roll</h3>
            <p style="font-size: 1rem; color: gray;">4.000$</p>
            <button style="background-color: #EC4899; color: white; padding: 0.5rem; border-radius: 0.375rem; width: 100%; margin-top: 0.5rem; font-size: 1rem;">Agregar al carrito</button>
        </div>
        <!-- Producto 3 -->
        <div style="background-color: white; padding: 1rem; border-radius: 0.5rem; text-align: center; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <img src="{{ asset('images/dulcealfajor.jpg') }}" alt="Torta de leche asada" style="width: 70%; border-radius: 0.5rem;display: block; margin: 0 auto;">
            <h3 style="font-size: 1.25rem; font-weight: bold; margin: 0.5rem 0;">Dulce Alfajor</h3>
            <p style="font-size: 1rem; color: gray;">6.000$</p>
            <button style="background-color: #EC4899; color: white; padding: 0.5rem; border-radius: 0.375rem; width: 100%; margin-top: 0.5rem; font-size: 1rem;">Agregar al carrito</button>
        </div>
    </div>
</section>

<section style="background-color: #F5E7D3; padding: 2rem;">
    <h2 style="text-align: center; font-size: 2rem; font-weight: bold; margin-bottom: 1rem;">Contacto</h2>
    <form style="max-width: 500px; margin: 0 auto; background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
        <label for="nombre" style="display: block; font-weight: bold; margin-bottom: 0.5rem;">Nombre:</label>
        <input type="text" id="nombre" name="nombre" style="width: 100%; padding: 0.5rem; border: 1px solid gray; border-radius: 0.375rem; margin-bottom: 1rem;">

        <label for="email" style="display: block; font-weight: bold; margin-bottom: 0.5rem;">Email:</label>
        <input type="email" id="email" name="email" style="width: 100%; padding: 0.5rem; border: 1px solid gray; border-radius: 0.375rem; margin-bottom: 1rem;">

        <label for="mensaje" style="display: block; font-weight: bold; margin-bottom: 0.5rem;">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" style="width: 100%; padding: 0.5rem; border: 1px solid gray; border-radius: 0.375rem; margin-bottom: 1rem;"></textarea>

        <button type="submit" style="background-color: #EF4444; color: white; padding: 0.5rem; border-radius: 0.375rem; width: 100%; font-size: 1rem;">Enviar</button>
    </form>
</section>

<section style="background-image: url('{{ asset('images/panaderiaIA.png') }}'); background-size: cover; background-position: center; padding: 2rem; text-align: center; color: white; display: flex; justify-content: center; align-items: center; height: 400px; position: relative;">
    <div style="background-image: url('{{ asset('images/panaderiaIA.png') }}'); background-size: cover; background-position: center; filter: blur(5px); position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;"></div>
    <div style="background-color: white; padding: 1rem; border-radius: 8px; display: inline-block; opacity: 0.9; position: relative; z-index: 2; text-align: center;">
        <h2 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem; color: black;">¿Trabajas con nosotros?</h2>
        <p style="margin-bottom: 1rem; color: black;">Ingresa a la plataforma de empleados mediante el siguiente botón:</p>
        <a href="/login">
            <button style="background-color: #2563EB; color: white; padding: 0.5rem; border-radius: 0.375rem; font-size: 1rem;">Iniciar sesión</button>
        </a>
    </div>
</section>


</x-Layout>
