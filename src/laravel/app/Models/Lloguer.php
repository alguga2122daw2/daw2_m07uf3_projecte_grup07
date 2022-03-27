<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloguer extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'email';
    public $incrementing = false;
    use HasFactory;
    protected $fillable = [
        'dni_Client',
        'id_Apartament',
        'data_Inici',
        'hora_Inici',
        'data_Final',
        'hora_Final',
        'lloc_Lliuament',
        'preu_Dia',
        'diposit',
        'cant_Diposit',
        'tipusAsseg',
        'llocDev'
    ];
}
