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
return view('lista.create');
}

/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{
//recepcionar todos los datos
$ListaData = request()->except("_token");
lista::insert($ListaData);
return redirect()->route('Lista_Reproduccion.index');
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
$lista=lista::findOrFail($id);
return view('Lista_Reproduccion.edit', compact('lista'));
}

/**
* Update the specified resource in storage.
*/
public function update(Request $request, string $id)
{
//
$ListaData=request()->except(['_token', '_method']);
lista::where('id', '=', $id)->update($ListaData);
return redirect('Lista_Reproduccion');
}

/**
* Remove the specified resource from storage.
*/
public function destroy(string $id)
{
//
lista::destroy($id);
return redirect('Lista_Reproduccion');
}
}