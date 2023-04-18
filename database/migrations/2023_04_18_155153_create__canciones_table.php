<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_canciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Titulo');
            $table->string('Artista');
            $table->string('Album');
            $table->string('Duracion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_canciones');
    }
};
