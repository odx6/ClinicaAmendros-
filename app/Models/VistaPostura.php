<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VistaPostura extends Model
{
    use HasFactory;
    protected $primaryKey="pk_vista";

    public function Posturas()
    {
        return $this->hasMany(Evaluacion_postura::class,'fk_postura','pk_vista');
    }
}
