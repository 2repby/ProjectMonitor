<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metric_value extends Model
{
    use HasFactory;
    protected $fillable = [
        'area_id',
        'metric_id',
        'period_id',
        'value',
    ];
    public function metric(){
        return $this->belongsTo(Metric::class);
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function period(){
        return $this->belongsTo(Period::class);
    }
}
