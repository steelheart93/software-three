<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $fillable = [
        'cc',
        'nombre',
        'eps',
        'fecha_cita',
        'tipo_cita',
    ];
}
