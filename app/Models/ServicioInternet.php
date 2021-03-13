<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioInternet extends Model
{
    use HasFactory;

    protected $table = 'servicios_internet';

    protected $fillable = ["nombre", "precio", "descripcion"];
}
