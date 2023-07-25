<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Antecedentes_Ph extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $fillable = [
         'fk_Antecedentes_ph',
         'Nombre_Antecedente',
         'valor',
         'Especificacion',
    ];
    protected $primaryKey = 'pk_Antecedentes_ph';
}
