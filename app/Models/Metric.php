<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'shortname',
        'description',
        'project_id'

    ];
    public function project(){
        return $this->belongsTo(Project::class);
    }
    public function metric_values()
    {
        return $this->hasMany(Metric_value::class);
    }
    public function areas(){
        return $this->belongsToMany(Area::class,'metric_values');
    }
    public function periods(){
        return $this->belongsToMany(Period::class,'metric_values');
    }



}
