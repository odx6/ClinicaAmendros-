<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prueba_Ms extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $primaryKey = 'pk_prueba';
    public function Movimientos()
    {
        return $this->hasMany(Movimiento::class,'fk_movimiento','pk_prueba');
    }
    
}
