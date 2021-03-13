<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $table = 'contratos';

    protected $fillable = ["nombre_usuario", "fecha", "tipo_servicio_contratado", "servicio_contratado", "precio"];
}
