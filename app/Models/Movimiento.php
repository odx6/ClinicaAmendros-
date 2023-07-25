<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movimiento extends Model
{
    use HasFactory;
     use SoftDeletes;
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
