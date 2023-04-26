@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Detalles de la canción</div>
                    <div class="panel-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Título:</td>
                                    <td>{{ $cancion->titulo }}</td>
                                </tr>
                                <tr>
                                    <td>Artista:</td>
                                    <td>{{ $cancion->artista }}</td>
                                </tr>
                                <tr>
                                    <td>Álbum:</td>
                                    <td>{{ $cancion->album }}</td>
                                </tr>
                                <tr>
                                    <td>Duración:</td>
                                    <td>{{ $cancion->duracion }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('canciones.index') }}" class="btn btn-default">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
