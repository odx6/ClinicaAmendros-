<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provedor extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $primaryKey='pk_proveedor';
    public function productos()
{
    return $this->belongsToMany(Producto::class, 'provedor__productos', 'fk_proveedor', 'fk_producto');
}
}
