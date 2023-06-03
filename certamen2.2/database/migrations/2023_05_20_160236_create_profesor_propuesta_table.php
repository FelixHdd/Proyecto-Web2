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
        Schema::create('profesor_propuesta', function (Blueprint $table) {
            //campos
            $table->integer('propuesta_id');
            $table->string('profesor_rut',10);
            $table->date('fecha');
            $table->time('hora');
            $table->text('comentario');
            //faltan las relaciones de PK Y FK correspondientes.
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesor_propuesta');
    }
};
