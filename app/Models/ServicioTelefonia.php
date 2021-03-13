<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioTelefonia extends Model
{
    use HasFactory;

    protected $table = 'servicios_telefonia';

    protected $fillable = ["nombre", "precio", "descripcion"];
}
