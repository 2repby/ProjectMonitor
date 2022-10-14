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
}
