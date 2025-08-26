<?php

namespace App\Http\Controllers;

use App\Models\Suplemento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuplementoController extends Controller
{
    public function index()
    {
        $suplementos = Suplemento::latest()->paginate(10);
        return view('suplementos.index', compact('suplementos'));
    }

    public function create()
    {
        return view('suplementos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'marca' => 'nullable|string|max:255',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categoria' => 'nullable|string|max:255',
            'presentacion' => 'nullable|string|max:255',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('suplementos', 'public');
        }

        Suplemento::create($data);

        return redirect()->route('suplementos.index')
                        ->with('success', 'Suplemento creado exitosamente.');
    }

    public function show(Suplemento $suplemento)
    {
        return view('suplementos.show', compact('suplemento'));
    }

    public function edit(Suplemento $suplemento)
    {
        return view('suplementos.edit', compact('suplemento'));
    }

    public function update(Request $request, Suplemento $suplemento)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'marca' => 'nullable|string|max:255',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categoria' => 'nullable|string|max:255',
            'presentacion' => 'nullable|string|max:255',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('imagen')) {
            // Eliminar imagen anterior si existe
            if ($suplemento->imagen) {
                Storage::disk('public')->delete($suplemento->imagen);
            }
            $data['imagen'] = $request->file('imagen')->store('suplementos', 'public');
        }

        $suplemento->update($data);

        return redirect()->route('suplementos.index')
                        ->with('success', 'Suplemento actualizado exitosamente.');
    }

    public function destroy(Suplemento $suplemento)
    {
        if ($suplemento->imagen) {
            Storage::disk('public')->delete($suplemento->imagen);
        }

        $suplemento->delete();

        return redirect()->route('suplementos.index')
                        ->with('success', 'Suplemento eliminado exitosamente.');
    }
}