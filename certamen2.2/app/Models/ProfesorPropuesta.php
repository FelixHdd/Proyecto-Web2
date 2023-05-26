<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;



class ProfesorPropuesta extends Model
{
    use HasFactory;
    protected $table = "profesor_propuesta";

    public function profesores():HasMany{
        return $this->hasMany(Profesor::class);
    }
}
