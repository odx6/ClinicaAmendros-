<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Evaluacion_postura extends Model
{
      protected $fillable = [
        'fk_postura',
        'Inclinacion_Corporal',
        'valor',
        'Observaciones',
        // Otros atributos fillable
    ];
    use HasFactory;
     use SoftDeletes;
    protected $primaryKey="pk_postura";

    public function Postura()
    {
         return $this->belongsTo(VistaPostura::class);
    }
}
