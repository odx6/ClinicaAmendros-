<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    use HasFactory;
    protected $primaryKey="pk_secretaria";
     public function Consultas()
    {
        return $this->hasMany(Consulta::class,'fk_secre','pk_secretaria');

    }
    public function Pagos()
    {
        return $this->hasMany(Pago::class,'fk_secre','pk_secretaria');

    }
}
