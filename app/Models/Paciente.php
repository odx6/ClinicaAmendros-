<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    //sirve para especificar que la columna no se llama id 
    protected $primaryKey = 'SS';
}
