<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
    public function trainingCenter(){
      return $this->belongsTo(TrainingCenter::class);
    }

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }
}
