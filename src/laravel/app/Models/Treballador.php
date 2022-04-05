<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Treballador extends Authenticatable
{
    public $timestamps = false;
    protected $primaryKey = 'email';
    public $incrementing = false;
    protected $table = 'treballadors';
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'contrasenya',
        'tipus',
        'hora_entrada',
        'hora_sortida'
    ];
    public function getAuthPassword() {
      return $this->contrasenya;
    }
}
