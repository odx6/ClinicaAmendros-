<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba_Ms extends Model
{
    use HasFactory;
    protected $primaryKey = 'pk_prueba';
    public function Movimientos()
    {
        return $this->hasMany(Movimiento::class,'fk_movimiento','pk_prueba');
    }
    
}
