<?php

namespace App\Http\Controllers;

use App\Models\Elemento;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ElementoController extends Controller
{
    public function index()
    {
        $elementos = Elemento::with('categoria')->latest()->paginate(10);
        return view('elementos.index', compact('elementos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('elementos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'precio_unitario' => 'required|numeric|min:0',
            'unidad_de_medida' => 'nullable|string|max:50',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        Elemento::create($request->all());

        return redirect()->route('elementos.index')
                         ->with('success', 'Elemento creado exitosamente.');
    }

    public function show(Elemento $elemento)
    {
        return view('elementos.show', compact('elemento'));
    }

    public function edit(Elemento $elemento)
    {
        $categorias = Categoria::all();
        return view('elementos.edit', compact('elemento', 'categorias'));
    }

    public function update(Request $request, Elemento $elemento)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'precio_unitario' => 'required|numeric|min:0',
            'unidad_de_medida' => 'nullable|string|max:50',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $elemento->update($request->all());

        return redirect()->route('elementos.index')
                         ->with('success', 'Elemento actualizado exitosamente.');
    }

    public function destroy(Elemento $elemento)
    {
        $elemento->delete();

        return redirect()->route('elementos.index')
                         ->with('success', 'Elemento eliminado exitosamente.');
    }
}