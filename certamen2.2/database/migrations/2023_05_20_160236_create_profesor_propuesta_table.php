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
            $table->integer('profesor_id');
            $table->primary(['propuesta_id','profesor_id']);
            //
            $table->date('fecha');
            $table->time('hora');
            $table->text('comentario');
            //
            $table->foreign('propuesta_id')->references('id')->on('propuestas');
            $table->foreign('profesor_id')->references('id')->on('profesores');

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
