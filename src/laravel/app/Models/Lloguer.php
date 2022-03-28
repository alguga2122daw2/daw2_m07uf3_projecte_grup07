<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloguer extends Model
{
    public $timestamps = false;
    protected $primaryKey = ['dni_client','id_apartament'];
    public $incrementing = false;
    use HasFactory;
    protected $fillable = [
        'dni_client',
        'id_apartament',
        'data_inici',
        'hora_inici',
        'data_final',
        'hora_final',
        'lloc_lliurament',
        'lloc_devolucio',
        'preu_per_dia',
        'diposit',
        'quantitat_diposit',
        'tipus_asseguranca',
    ];
}
