<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name'];

    protected $allowIncluded = [
        'area',
        'area.teachers',
        'area.teachers.trainingcenter',

        'apprentices',
        'apprentices.computer',
    ];
    public function trainingCenter(){
        return $this->belongsTo(TrainingCenter::class);
    }

    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function apprentices(){
        return $this->hasMany(Apprentice::class);
    }

    public function scopeIncluded(Builder $query){
        if(empty($this->allowIncluded) || empty(request('included'))){
            return;
        }

        $relations = explode(',', request('included'));

        $allowIncluded = collect($this->allowIncluded);

        foreach($relations as $key => $relationship){
            if(!$allowIncluded->contains($relationship)){
                unset($relations[$key]);
            }
        }

        $query->with($relations);
    }
}
