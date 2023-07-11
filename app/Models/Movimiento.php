<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'fk_movimiento',
                'NombreMovi',
                'valor',
       
    ];
    protected $primaryKey = 'pk_movimiento';

    public function Prueba()
    {
         return $this->belongsTo(Prueba_Ms::class);
    }

}
