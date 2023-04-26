@extends('layouts.app')

@section('content')
<div class="container">
<h1>Canciones</h1>
<a href="{{ route('canciones.create') }}" class="btn btn-primary mb-3">Agregar Canción</a>
<div class="table-responsive">
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Título</th>
<th>Artista</th>
<th>Álbum</th>
<th>Duración</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach ($canciones as $cancion)
<tr>
<td>{{ $cancion->id }}</td>
<td>{{ $cancion->titulo }}</td>
<td>{{ $cancion->artista }}</td>
<td>{{ $cancion->album }}</td>
<td>{{ $cancion->duracion }}</td>
<td>
<a href="{{ route('canciones.show', $cancion->id) }}" class="btn btn-info btn-sm mr-1">Ver</a>
<a href="{{ route('canciones.edit', $cancion->id) }}" class="btn btn-primary btn-sm mr-1">Editar</a>
<form action="{{ route('canciones.destroy', $cancion->id) }}" method="POST" style="display: inline-block;">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta canción?')">Eliminar</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection