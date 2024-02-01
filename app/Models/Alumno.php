<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    //establecer las relaciones en las tablas carrera y alumno
    public function Carrera(){
        return $this->belongsTo(Carrera::class, 'carrera_id', 'id');
    }
}
