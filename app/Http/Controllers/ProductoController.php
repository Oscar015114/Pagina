<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $productos = Producto::all();
        return view('producto.index') ->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $productos = new Producto();
        $productos -> nombre = $request ->get('nombre');
        $productos -> precio = $request ->get('precio');
        $productos -> categoria = $request ->get('categoria');
        $productos -> stock = $request ->get('stock');
        //guarda los cambios
        $productos->save();
        //nos redirige nuevamente a la pagina de productos
        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $productos = producto::find($id);
        return view('edit', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $productos= producto::find($id);
        $productos -> nombre = $request ->post('nombre');
        $productos -> precio = $request ->post('precio');
        $productos -> categoria = $request ->post('categoria');
        $productos -> stock = $request ->post('stock');
        $productos->save();
        //nos redirige nuevamente a la pagina de productos
        return redirect()->route('producto.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
