<?php

namespace App\Http\Controllers;


use App\Models\Project;
use App\Services\MetricService;
use Illuminate\Http\Request;
use App\Models\Metric;
use App\Models\User;
use Illuminate\Support\Facades\Gate;


class MetricController extends Controller
{
    protected $metricService;

    public function __construct(){
        $this->metricService = new MetricService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return response(Metric::all());
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
            'code' => 'string|required',
            'project_id' => 'required'
        ]);
        $project = Project::find($request->project_id);

        if (! Gate::allows('store-metric', $project)) {
            $response = [
                'message' => 'User not authorised to perform the action',
            ];
            return response($response,403);
        }
        return response(Metric::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Metric::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $metric = Metric::find($id);

        if (! Gate::allows('update-metric', $metric)) {
            $response = [
                'message' => 'User not authorised to perform the action',
            ];
            return response($response,403);
        }
        $metric->update($request->all());
        return $metric;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response(Metric::destroy($id));
    }

    /**
     * УДАЛИТЬ
     *
     */
    public function get_user_by_metric($id)
    {

        $metricService = new MetricService();
        return $metricService->get_user_by_metric($id);

    }
    public function get_project($id){
        return response(Metric::class->find($id)->project());
    }


}
