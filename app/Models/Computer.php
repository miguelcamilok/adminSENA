<?php

namespace App\Models;

use App\Traits\HasSmartScopes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Computer extends Model
{
    use HasFactory, HasSmartScopes;

    protected $fillable = ['name'];

    public function apprentice(){ return $this->hasOne(Apprentice::class); }

}
