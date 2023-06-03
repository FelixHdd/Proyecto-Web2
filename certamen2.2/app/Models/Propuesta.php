<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Propuesta extends Model
{
    use HasFactory;
    protected $table = 'propuestas';
    protected $primarykey = 'id';
    public $timestamps = false;

    public function estudiantes():HasMany{
        return $this->hasMany(Estudiante::class,'estudiante_rut');
    }
    
}
