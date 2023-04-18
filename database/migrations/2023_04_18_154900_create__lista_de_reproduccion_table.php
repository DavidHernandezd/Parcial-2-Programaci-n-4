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
        Schema::create('_lista_de_reproduccion', function (Blueprint $table) {
            $table->string("ID");
            $table->string("Nombre");
            $table->string("Descripcion");
            $table->date("FechaDeCreación");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_lista_de_reproduccion');
    }
};
