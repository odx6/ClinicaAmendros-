<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamientos_p extends Model
{
    use HasFactory;
     protected $fillable = [
         'fk_tratamientos_p',
                'des_tratamiento',
    ];
     protected $primaryKey = 'pk_tratamientos_p';

}
