<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartament extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_apartament';
    public $incrementing = false;
    use HasFactory;
    protected $fillable = [
        "id_apartament",
        "ref_catast",
        "ciutat",
        "barri",
        "carrer",
        "porta",
        "pis",
        "num_llits",
        "num_habitacions",
        "ascensor",
        "calefaccio",
        "aire_condicionat"
    ];
}
