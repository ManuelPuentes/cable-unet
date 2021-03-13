<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudCambio extends Model
{
    use HasFactory;

    protected $table = 'solicitudes_cambio';

    protected $fillable = ["id_contrato", "estado", "nombre_usuario", "servicio_actual", "servicio_nuevo"];
}
