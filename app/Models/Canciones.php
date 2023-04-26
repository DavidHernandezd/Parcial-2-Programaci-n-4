<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canciones extends Model
{
    use HasFactory;

    protected $table = 'table_canciones'; // Establece el nombre de la tabla a 'table_canciones'

    protected $fillable = [
        'titulo',
        'artista',
        'album',
        'duracion',
    ];
}
