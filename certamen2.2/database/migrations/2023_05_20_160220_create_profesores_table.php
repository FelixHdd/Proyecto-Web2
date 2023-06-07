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
        Schema::create('profesores', function (Blueprint $table) {
            //campos
            $table->integer('id')->autoIncrement();
            $table->string('nombre',20);
            $table->string('apellido',20);
            $table->string('email',20);
            
            //faltan las relaciones de PK Y FK correspondientes.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesores');
    }
};
