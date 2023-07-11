<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'pk_cita';
    public function Doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
