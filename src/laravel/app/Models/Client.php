<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'dni_client';
    public $incrementing = false;
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
       'num_targeta',
    ];
}
