<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    public function apprentice(){
        return $this->hasOne(Apprentice::class);
    }
}
