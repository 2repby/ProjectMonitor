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
        'project_id',
        'norma_metric_id',

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
        return $this->belongsToMany(Period::class,'metrics_periods');
    }
    // Циклическая связь
    public function metrics()
    {
        return $this->hasMany(Metric::class, 'norma_metric_id', 'id');
    }
    public function norma(){
        return $this->belongsTo(Metric::class, 'norma_metric_id', 'id');
    }

}
