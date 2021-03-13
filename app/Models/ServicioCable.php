<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioCable extends Model
{
    use HasFactory;

    protected $table = 'servicios_cable';

    protected $fillable = ["nombre", "precio", "descripcion", "canales"];
}
