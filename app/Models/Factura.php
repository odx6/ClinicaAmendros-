<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Factura extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $primaryKey='pk_factura';

     public function productos()
{
    return $this->belongsToMany(Producto::class, 'factura__productos', 'fk_factura', 'fk_producto');
}
}
