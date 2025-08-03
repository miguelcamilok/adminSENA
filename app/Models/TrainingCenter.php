<?php

namespace App\Models;

use App\Traits\HasSmartScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingCenter extends Model
{
    use HasFactory, HasSmartScopes;
    
    protected $fillable = ['name'];

    public function teachers(){ return $this->hasMany(Teacher::class); }

    public function courses(){ return $this->hasMany(Course::class); }
}
