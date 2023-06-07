<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;



class ProfesorPropuesta extends Model
{
    use HasFactory;
    protected $table = "profesor_propuesta";
    public $timestamps = false;

    public function profesores():HasMany{
        return $this->hasMany(Profesor::class);
    }
    
    public function propuestas():BelongsToMany{
        return $this->belongsToMany(Propuesta::class);
    }
}
