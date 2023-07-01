<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribuidor extends Model
{
    use HasFactory;

    public function Proyecto (){
        return $this->hasMany(Proyecto::class); 
    }


}