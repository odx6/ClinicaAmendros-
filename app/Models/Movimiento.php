<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo1',
        'ValorT1',
        'titulo2',
        'ValorT2',
        'NombreMovi',
        // Otros atributos fillable
    ];
    protected $primaryKey = 'pk_movimiento';

    public function Prueba()
    {
         return $this->belongsTo(Prueba_Ms::class);
    }

}
