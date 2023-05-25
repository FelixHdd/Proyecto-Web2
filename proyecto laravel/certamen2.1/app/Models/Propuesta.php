<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Propuesta extends Model
{
    use HasFactory;
    protected $table = 'propuestas';

    public function estudiantes():HasMany{
        return $this->hasMany(Estudiante::class);
    }

    // falta la relacion de la tabla propuestas con la profesorpropuestas.

}
