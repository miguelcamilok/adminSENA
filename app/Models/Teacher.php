<?php

namespace App\Models;

use App\Traits\HasSmartScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory, HasSmartScopes;

    protected $fillable = ['name', 'email', 'area_id', 'training_center_id'];

    public function trainingCenter(){ return $this->belongsTo(TrainingCenter::class); }

public function courses()
{
    return $this->belongsToMany(Course::class, 'course_teachers', 'teacher_id', 'course_id');
}


    public function area(){ return $this->belongsTo(Area::class); }
}
