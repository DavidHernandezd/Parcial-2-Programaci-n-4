<form method="POST" action="{{ route('canciones.store') }}">
    @csrf
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
    </div>
    <div class="form-group">
        <label for="artista">Artista:</label>
        <input type="text" class="form-control" id="artista" name="artista" required>
    </div>
    <div class="form-group">
        <label for="album">Álbum:</label>
        <input type="text" class="form-control" id="album" name="album" required>
    </div>
    <div class="form-group">
        <label for="duracion">Duración:</label>
        <input type="text" class="form-control" id="duracion" name="duracion" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
