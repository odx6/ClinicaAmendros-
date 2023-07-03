<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion_postura extends Model
{
      protected $fillable = [
        'fk_postura',
        'Inclinacion_Corporal',
        'L',
        'M',
        'S',
        'Tipo_vista',
        // Otros atributos fillable
    ];
    use HasFactory;
    protected $primaryKey="pk_postura";

    public function Postura()
    {
         return $this->belongsTo(VistaPostura::class);
    }
}
