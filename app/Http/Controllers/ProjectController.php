<?php

namespace App\Http\Controllers;

use App\Models\Metric_value;
use App\Models\Period;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Gate;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return response(Project::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        return Project::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id): Project
    {
        return Project::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $project = Project::find($id);
        if (! Gate::allows('update-project', $project)) {
            $response = [
                'message' => 'User not authorised to perform the action',
            ];
            return response($response,403);
        }
        $project->update($request->all());
        return $project;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if (! Gate::allows('update-project', $project)) {
            $response = [
                'message' => 'User not authorised to perform the action',
            ];
            return response($response,403);
        }
        return response(Project::destroy($id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return response(Project::where('name', 'like', '%'.$name.'%')->get());
    }
    /**
     * Return all projects with metrics.
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function withmetrics($id=null)
    {
        if (is_null($id))
            return response(Project::with('metrics')->get());
        else
        {
            return response(Project::with('metrics')->find($id));
        }
    }
    public function metric_values($id){
        $project = Project::find($id);
//        return response(Project::with(['metrics.metric_values' => function($q) {$q->where('area_id', 1);}, 'metrics.metric_values.area'])->find($id));
        return response(Project::with(['metrics.metric_values.area'])->find($id));

    }
}
