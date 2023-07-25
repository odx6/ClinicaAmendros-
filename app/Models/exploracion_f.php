<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class exploracion_f extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $primaryKey = 'pk_Exploracion';
}
