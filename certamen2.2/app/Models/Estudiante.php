<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';
    protected $primarykey = 'rut';
    protected $keyType = "string";
    

    public function propuesta():BelongTo{
        return this->belongsTo(Propuesta::class);
    }

}
