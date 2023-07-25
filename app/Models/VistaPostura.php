<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VistaPostura extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $primaryKey="pk_vista";

    public function Posturas()
    {
        return $this->hasMany(Evaluacion_postura::class,'fk_postura','pk_vista');
    }
}
