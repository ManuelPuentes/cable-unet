<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaqueteServicio extends Model
{
    use HasFactory;

    protected $table = 'paquetes_servicios';

    protected $fillable = ["nombre", "precio", "descripcion", "paquetes"];
}
