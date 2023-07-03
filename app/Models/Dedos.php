<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dedos extends Model
{
    protected $fillable = [
        'fk_dedos',
        'Nombre',
        'MCF',
        'IFP',
        'IFD',
        'ABD',
        // Otros atributos fillable
    ];
    use HasFactory;
    protected $primaryKey = 'pk_dedos';
    
    public function Prueba()
    {
         return $this->belongsTo(Prueba_Ms::class);
    }

}
