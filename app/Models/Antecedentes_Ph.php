<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antecedentes_Ph extends Model
{
    use HasFactory;
    protected $fillable = [
         'fk_Antecedentes_ph',
         'Nombre_Antecedente',
         'valor',
         'Especificacion',
    ];
    protected $primaryKey = 'pk_Antecedentes_ph';
}
