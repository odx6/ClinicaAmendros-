<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial_Clinico extends Model
{
    use HasFactory;
    protected $primaryKey = 'idHIstorial_clinico';
    public function Exploraciones()
    {
        return $this->hasMany(exploracion_f::class,'fk_e','idHIstorial_clinico');
    }
}