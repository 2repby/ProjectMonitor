<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;
    public function metric_values()
    {
        return $this->hasMany(Metric_value::class);
    }
    public function metrics(){
        return $this->belongsToMany(Metric::class,'metric_values');
    }
    public function areas(){
        return $this->belongsToMany(Area::class,'metric_values');
    }
}

