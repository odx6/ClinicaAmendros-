<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $primaryKey='pk_producto';

    public function proveedores()
{
    return $this->belongsToMany(Provedor::class, 'provedor__productos', 'fk_producto', 'fk_proveedor');
}

   public function facturas()
{
    return $this->belongsToMany(Factura::class, 'factura__productos', 'fk_producto', 'fk_factura');
    
}

}
