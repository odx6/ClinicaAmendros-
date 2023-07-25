<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Signos_Vitales extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $primaryKey = 'Pk_Signos_vitales';
}
