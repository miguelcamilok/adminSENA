<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $allowIncluded = [
        'computer',
        'course',
        'course.area',
        'course.area.teachers',
        'course.area.teachers.trainingcenter'
    ];

    protected $allowFilter = ['id', 'name', 'cell_number'];


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
