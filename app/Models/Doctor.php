<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $primaryKey = 'DSS';

     public function Pacientes()
    {
        return $this->hasMany(Paciente::class,'PacienteDoctor','DSS');
    }
    public function Citas()
    {
        return $this->hasMany(Cita::class,'fk_dc','DSS');

    }

     public function Consultas()
    {
        return $this->hasMany(Consulta::class,'fk_doctor','DSS');

    }
}
