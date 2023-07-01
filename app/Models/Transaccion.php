<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;
    public function Cuenta(){
        return $this->hasMany(Cuenta::class); //un persona pertenece a
    }

    public function Contribuidor(){
        return $this->hasMany(Contribuidor::class); //un persona pertenece a
    }
}
