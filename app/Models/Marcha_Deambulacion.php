<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marcha_Deambulacion extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $primaryKey = 'pk_marcha';

}
