<?php

namespace App\Models;

use App\Traits\HasSmartScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory, HasSmartScopes;
    
    protected $fillable = ['name'];

public function teachers()
{
    return $this->belongsToMany(Teacher::class, 'course_teachers', 'course_id', 'teacher_id');
}


    public function area(){ return $this->belongsTo(Area::class); }

    public function apprentices(){ return $this->hasMany(Apprentice::class); }
}
