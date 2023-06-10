<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Propuesta extends Model
{
    use HasFactory;
    protected $table = 'propuestas';
    protected $primarykey = 'id';
    public $timestamps = false;

    public function estudiante(){
    return $this->belongsTo(Estudiante::class, 'estudiante_rut', 'rut');
    }
    public function profesorpropuestas():BelongsToMany{
        return $this->belongsToMany(ProfesorPropuesta::class);
    }
}
