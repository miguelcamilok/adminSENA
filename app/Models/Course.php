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

    protected $allowFilter = ['id', 'course_number', 'day'];
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

    public function scopeFilter(Builder $query)
    {

        if (empty($this->allowFilter) || empty(request('filter'))) {
            return;
        }

        $filters = request('filter');
        $allowFilter = collect($this->allowFilter);

        foreach ($filters as $filter => $value) {

            if ($allowFilter->contains($filter)) {

                $query->where($filter, 'LIKE', '%' . $value . '%');//nos retorna todos los registros que conincidad, asi sea en una porcion del texto
            }
        }
    }
}
