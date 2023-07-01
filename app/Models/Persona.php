<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    public function User(){
        return $this->belongsTo(User::class); 
    }

    public function Proyecto(){
        return $this->hasMany(Proyecto::class); 
    }

}
