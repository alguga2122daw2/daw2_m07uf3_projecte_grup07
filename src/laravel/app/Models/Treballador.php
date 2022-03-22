<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treballador extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'contrasenya',
        'tipus',
        'hora_entrada',
        'hora_sortida'
    ];
}
