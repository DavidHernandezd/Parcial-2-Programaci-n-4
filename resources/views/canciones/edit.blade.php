@extends('layouts.app')

@section('content')
    <h1>Editar Cancion</h1>

    <form method="POST" action="{{ route('canciones.update', $cancion->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" value="{{ $cancion->titulo }}">
        </div>

        <div>
            <label for="artista">Artista:</label>
            <input type="text" name="artista" value="{{ $cancion->artista }}">
        </div>

        <div>
            <label for="album">Album:</label>
            <input type="text" name="album" value="{{ $cancion->album }}">
        </div>

        <div>
            <label for="duracion">Duracion:</label>
            <input type="text" name="duracion" value="{{ $cancion->duracion }}">
        </div>

        <button type="submit">Guardar Cambios</button>
    </form>
@endsection
