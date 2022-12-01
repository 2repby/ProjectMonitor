<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(User::class,'area_users');
    }

    public function metric_values()
    {
        return $this->hasMany(Metric_value::class);
    }
    public function periods(){
        return $this->belongsToMany(Period::class,'metric_values');
    }
    public function metrics(){
        return $this->belongsToMany(Metric::class,'metric_values');
    }
}
