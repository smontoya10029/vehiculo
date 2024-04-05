<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncargadoVehiculo extends Model
{
    
    use HasFactory;

    protected $table = 'encargado_vehiculos';

    protected $fillable = [
        'cedula',
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'ciudad',
        'tipo_propiedad',
    ];

}
