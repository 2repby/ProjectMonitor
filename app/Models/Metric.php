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

}
