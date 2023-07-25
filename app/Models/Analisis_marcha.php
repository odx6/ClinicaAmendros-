<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Analisis_marcha extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $primaryKey="pk_Analis_marcha";
    
}
