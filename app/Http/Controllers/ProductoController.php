<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductoReposteriaRequest;
use App\Http\Requests\StoreProductoPanaderiaRequest;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Mail;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with('categoria')
                    ->orderBy('id', 'desc')
                    ->paginate(10);

        return view('reposteria.index', compact('productos'));
    }

    public function reposteria()
    {
        $categoriaReposteria = 2;
        $productos = Producto::where('categoria_id', $categoriaReposteria)
                    ->paginate(10);

        return view('reposteria.index', compact('productos'));
    }

    // Índice para panadería
    public function panaderia()
    {
        $categoriaPanaderia = 1;
        $productos = Producto::where('categoria_id', $categoriaPanaderia)
                    ->paginate(10);

        return view('panaderia.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    public function createReposteria()
    {
        $categoriaReposteria = 2; // ID de repostería
        return view('reposteria.create', [
            'categorias' => Categoria::all(),
            'categoriaDefault' => $categoriaReposteria
        ]);
    }

    // CREATE para panadería
    public function createPanaderia()
    {
        $categoriaPanaderia = 1; // ID de panadería
        return view('panaderia.create', [
            'categorias' => Categoria::all(),
            'categoriaDefault' => $categoriaPanaderia
        ]);
    }

    // En ProductoController.php

    public function storeReposteria(StoreProductoReposteriaRequest $request)
    {
        $data = $request->validated();

        // Procesar imagen si existe
        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('reposteria', 'public');
        }

        Producto::create($data);

        return redirect()->route('reposteria.index');
    }


    public function storePanaderia(StoreProductoPanaderiaRequest $request)
    {
        $data = $request->validated();
        $data['categoria_id'] = 1; // Forzar categoría panadería

        Producto::create($data);
        return redirect()->route('panaderia'); // Usar el nombre correcto de la ruta
    }

    public function showReposteria(Producto $producto)
    {
        return view('reposteria.show', compact('producto'));
    }

    public function editReposteria(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('reposteria.edit', compact('producto', 'categorias'));
    }

    public function updateReposteria(StoreProductoReposteriaRequest $request, Producto $producto)
    {
        $producto->update($request->all());
        return redirect()->route('reposteria.index');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
