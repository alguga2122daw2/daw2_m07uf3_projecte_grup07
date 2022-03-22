<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartament extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_Apartament",
        "refCast",
        "ciutat",
        "barri",
        "carrer",
        "pis",
        "porta",
        "numLlits",
        "numHab",
        "ascen",
        "ac"
    ];
}