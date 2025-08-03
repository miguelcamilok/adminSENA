<?php

namespace App\Models;

use App\Traits\HasSmartScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory, HasSmartScopes;

    protected $fillable = ['name'];

    public function trainingCenter(){ return $this->belongsTo(TrainingCenter::class); }

    public function courses(){ return $this->belongsToMany(Course::class); }

    public function area(){ return $this->belongsTo(Area::class); }
}
