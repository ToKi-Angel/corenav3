<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;

    protected $table = 'beneficiarios';

    public function carrera()
    {
        return $this->belongsTo(Carreras::class, 'folio', 'folio');
    }
}
