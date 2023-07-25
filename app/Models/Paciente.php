<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    use HasFactory;
     use SoftDeletes;
    //sirve para especificar que la columna no se llama id 
    protected $primaryKey = 'SS';

 public function Doctor()
    {
         return $this->belongsTo(Doctor::class);
    }

//Relaciones uno a muchos 
    public function historiales()
    {
        return $this->hasMany(Historial_Clinico::class,'PacienteSS','SS');
    }
    
    public function Ginecobstetricos()
    {
        return $this->hasMany(a_ginecobstetrico::class,'fk_ag','SS');
    }
    public function Patologicos()
    {
        return $this->hasMany(a_patologico::class,'fk_ap','SS');
    }
    public function notasPost()
    {
        return $this->hasMany(nota_p_quirurgica::class,'fk_npq','SS');
    }
    public function notas()
    {
        return $this->hasMany(nota::class,'fk_n','SS');
    }
    public function Estudios()
    {
        return $this->hasMany(estudio::class,'fk_e','SS');
    }
    public function EsploracionFisica()
    {
        return $this->hasMany(exploracion_f::class,'fk_p','SS');
    }
    public function citas()
    {
        return $this->hasMany(Cita::class,'fk_pc','SS');
    }



}
