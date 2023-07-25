<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pago extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $primaryKey="pk_pagos";

     public function Secretaria()
    {
         return $this->belongsTo(Secretaria::class);
    }
}
