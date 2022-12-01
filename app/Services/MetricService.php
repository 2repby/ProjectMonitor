<?php

namespace App\Services;

use App\Models\Metric;
use Illuminate\Support\Facades\DB;

class MetricService
{
    /**
     * Get user of the project with specified metcric.
     *
     * @param  int  $id
     * @return \App\Models\User
     */
    public function get_user_by_metric($id)
    {

        $user = DB::table('users')
            ->join('projects', 'projects.user_id', '=', 'users.id')
            ->join('metrics', 'projects.id', '=', 'metrics.project_id')
            ->where('metrics.id','=',$id)
            ->select('users.*')
            ->get()->first();
        return $user;
    }
}
