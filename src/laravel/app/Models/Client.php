<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
       'dni_client',
       'nom_cognoms',
       'edat',
       'telefon',
       'adreca',
       'ciutat',
       'pais',
       'email',
       'tipus_targeta',
       'numTargeta',
    ];
}
