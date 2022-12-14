<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description'
    ];
    public function metrics()
    {
        return $this->hasMany(Metric::class);
    }
    public function periods()
    {
        return $this->hasMany(Period::class);
    }
//    public function metric_values(){
//        return $this->hasManyThrough(Metric_value::class,Period::class, );
//    }
    // Так работало:
//    public function metric_values(){
//        return $this->hasManyThrough(Metric_value::class,Metric::class, );
//    }

}
