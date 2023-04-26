<?php

namespace App\Http\Controllers;

use App\Models\Canciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CancionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $canciones = DB::table('table_canciones')->get();
    
        return view('canciones.index', compact('canciones'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('canciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cancion = new Canciones;
        $cancion->titulo = $request->input('titulo');
        $cancion->artista = $request->input('artista');
        $cancion->album = $request->input('album');
        $cancion->duracion = $request->input('duracion');
        $cancion->save();

        return redirect('/canciones')->with('success', 'Cancion agregada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cancion = DB::table('table_canciones')->where('id', $id)->first();
        return view('canciones.show', ['cancion' => $cancion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cancion = DB::table('table_canciones')->where('id', $id)->first();
        return view('canciones.edit', ['cancion' => $cancion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cancion = DB::table('table_canciones')->where('id', $id)->update([
            'titulo' => $request->input('titulo'),
            'artista' => $request->input('artista'),
            'album' => $request->input('album'),
            'duracion' => $request->input('duracion')
        ]);

        return redirect('/canciones')->with('success', 'Cancion actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('table_canciones')->where('id', $id)->delete();

        return redirect('/canciones')->with('success', 'Cancion eliminada exitosamente');
    }
}
