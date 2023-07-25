<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consulta extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $primaryKey="pk_consulta";

    public function Doctor()
    {
        return $this->belongsTo(Doctor::class);

    }
     public function Secretaria()
    {
        return $this->belongsTo(Secretaria::class);

    }
}
