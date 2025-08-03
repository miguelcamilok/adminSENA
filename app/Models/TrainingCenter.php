<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingCenter extends Model
{

    use HasFactory;
    
    protected $fillable = ['name'];

    protected $allowIncluded = [
        'teachers',
        'teachers.area',
        'teachers.area.courses',
        'teachers.area.courses.apprentices',
        'teachers.area.courses.apprentices.computer',

        'courses',
        'courses.apprentices',
        'courses.apprentices.computer',

        'courses.area',
        'courses.area.teachers',
    ];

    protected $allowFilter = ['id', 'name', 'location'];
    //
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }

    public function scopeIncluded(Builder $query){
        if(empty($this->allowIncluded || request('included'))){
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
