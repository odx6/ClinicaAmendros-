<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class F_ExploracionFisica extends Model
{
    use HasFactory;
     use SoftDeletes;
     protected $fillable = [
         'fk_Exploracion_ff',
                'Peso',
                'Estatura',
                'IMC',
                'Etnia',
                'Motivo',
       
    ];
     protected $primaryKey = 'pk_Exploracion_ff';
}
