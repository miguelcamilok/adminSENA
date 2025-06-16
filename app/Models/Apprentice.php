<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{

    protected $fillable = ['name'];
    protected $allowIncluded = [
        'computer',
        'course',
        'course.area',
        'course.area.teachers',
        'course.area.teachers.trainingcenter'
    ];


    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function computer(){
        return $this->belongsTo(Computer::class);
    }

    public function scopeIncluded(Builder $query){
        if(empty($this->allowIncluded) || empty(request('included'))) {
            return;
        }

        $relations = explode(',', request('included'));

        $allowIncluded = collect($this->allowIncluded);

        foreach($relations as $key =>$relationship){
            if(!$allowIncluded->contains($relationship)){
                unset($relations[$key]);
            }
        }

        $query->with($relations);
    }
}
