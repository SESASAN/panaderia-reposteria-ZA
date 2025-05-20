<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductoReposteriaRequest;
use App\Http\Requests\StoreProductoPanaderiaRequest;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Mail;

class ProductoController extends Controller
{
    // ====== VISTAS DE ÍNDICE ======
    public function reposteria()
    {
        $productos = Producto::where('categoria_id', 2)->paginate(10);
        return view('reposteria.index', compact('productos'));
    }

    public function panaderia()
    {
        $productos = Producto::where('categoria_id', 1)->paginate(10);
        return view('panaderia.index', compact('productos'));
    }

    // ====== CREATE ======
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    public function createReposteria()
    {
        return view('reposteria.create', [
            'categorias' => Categoria::all(),
            'categoriaDefault' => 2
        ]);
    }

    public function createPanaderia()
    {
        return view('panaderia.create', [
            'categorias' => Categoria::all(),
            'categoriaDefault' => 1
        ]);
    }

    // ====== STORE ======
    public function storeReposteria(StoreProductoReposteriaRequest $request)
    {
        $data = $request->validated();
        $data['categoria_id'] = 2;

        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('reposteria', 'public');
        }

        Producto::create($data);
        return redirect()->route('reposteria');
    }

    public function storePanaderia(StoreProductoPanaderiaRequest $request)
    {
        $data = $request->validated();
        $data['categoria_id'] = 1;

        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('panaderia', 'public');
        }

        Producto::create($data);
        return redirect()->route('panaderia');
    }

    // ====== SHOW ======
    public function showReposteria(Producto $producto)
    {
        return view('reposteria.show', compact('producto'));
    }

    public function showPanaderia(Producto $producto)
    {
        return view('panaderia.show', compact('producto'));
    }

    // ====== EDIT ======
    public function editReposteria(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('reposteria.edit', compact('producto', 'categorias'));
    }

    public function editPanaderia(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('panaderia.edit', compact('producto', 'categorias'));
    }

    // ====== UPDATE ======
    public function updateReposteria(StoreProductoReposteriaRequest $request, Producto $producto)
    {
        $data = $request->validated();

        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('reposteria', 'public');
        }

        $producto->update($data);
        return redirect()->route('reposteria');
    }

    public function updatePanaderia(StoreProductoPanaderiaRequest $request, Producto $producto)
    {
        $data = $request->validated();

        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('panaderia', 'public');
        }

        $producto->update($data);
        return redirect()->route('panaderia');
    }

    // ====== DELETE ======
    public function destroyReposteria(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('reposteria');
    }

    public function destroyPanaderia(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('panaderia');
    }
}
