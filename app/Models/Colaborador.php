<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;
    public function User(){  

    return $this->belongsTo(User::class);
    }

    public function Tarjeta(){

        return $this->hasMany(Tarjeta::class);
        }
}
