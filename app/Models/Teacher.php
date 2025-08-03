<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $allowIncluded = [
        'area',
        'area.courses',
        'area.courses.apprentices',
        'area.courses.apprentices.computer',
        'area.courses.trainingcenter',

        'trainingcenter',        
        'trainingcenter.courses',        
        'trainingcenter.courses.area',        
        'trainingcenter.courses.apprentices',        
        'trainingcenter.courses.apprentices.computer',        

    ];

    protected $allowFilter = ['id', 'name', 'email'];
    
    public function trainingCenter(){
      return $this->belongsTo(TrainingCenter::class);
    }

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function scopeIncluded(Builder $query){
        if(empty($this->allowIncluded) || empty(request('included'))){
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
