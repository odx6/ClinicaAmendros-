<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tratamientos_p extends Model
{
    use HasFactory;
     use SoftDeletes;
     protected $fillable = [
         'fk_tratamientos_p',
                'des_tratamiento',
    ];
     protected $primaryKey = 'pk_tratamientos_p';

}
