<?php

namespace App\Models;

use App\Traits\HasSmartScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory, HasSmartScopes;

    protected $fillable = ['name', 'email', 'cell_number', 'course_id', 'computer_id'];

    public function course(){ return $this->belongsTo(Course::class); }
    public function computer(){ return $this->belongsTo(Computer::class); }
}
