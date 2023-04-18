<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\canciones;

class CancionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['Canciones'] = Canciones::all();
        return view('canciones.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('canciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //recepcionar todos los datos
        $cancionesData = request()->except("_token");
        canciones::insert($cancionesData);
        return redirect()->route('canciones.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //recuperar los datos
        $canciones=canciones::findOrFail($id);
        return view('canciones.edit', compact('canciones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $cancionesData=request()->except(['_token', '_method']);
        canciones::where('id', '=', $id)->update($cancionesData);
        return redirect('canciones');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        canciones::destroy($id);
        return redirect('canciones');
    }
}
