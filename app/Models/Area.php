<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    protected $fillable = ['name'];
    protected $allowIncluded = [
        
        'courses',
        'courses.apprentices',
        'courses.apprentices.computer',

        'teachers',
        'teachers.trainingcenter',
        'teachers.trainingcenter.courses',
        'teachers.trainingcenter.courses.apprentices',
        'teachers.trainingcenter.courses.apprentices.computer',
    ];
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function scopeIncluded(Builder $query)
    {
        if (empty($this->allowIncluded) || empty(request('included'))) {
            return;
        }

        $relations = explode(',', request('included'));

        $allowIncluded = collect($this->allowIncluded);

        foreach ($relations as $key => $relationship) {
            if (!$allowIncluded->contains($relationship)) {
                unset($relations[$key]);
            }
        }

        $query->with($relations);
    }
}
