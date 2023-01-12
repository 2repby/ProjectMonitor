<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Metric;
use App\Models\Metric_value;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class MetricValuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Не используется пока
    public function metricValuesByProject($id)
    {
        $res = [];
        $metrics = DB::table('metrics')->where('project_id', $id)->get();
        foreach ($metrics as $metric)
        {
            $m = [];
            $metric_values = DB::table('metric_values')->where('metric_id', $metric->id)->get();
            foreach ($metric_values as $metric_value)
            {

                $area = DB::table('areas')->where('id', $metric_value->area_id)->first();
                $metric_value->area = $area;
                $norma = DB::table('metric_values')
                    ->where('metric_id', $metric->norma_metric_id)
                    ->where('area_id', $metric_value->area_id)
                    ->where('period_id', $metric_value->period_id)
                    ->first();
                if (!is_null($norma)){
                    $metric_value->norma_value = $norma->value;
                }
                array_push($m, $metric_value);
            }
            $metric->metric_values = $m;
            array_push($res, $metric);

        }

        return response($res);

        //return response(Metric::with(['metric_values.area', 'norma'])->where('project_id', $id)->get());
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
            'area_id' => 'integer|required',
            'metric_id' => 'integer|required',
            'period_id' => 'integer|required',
            'value' => 'numeric|required',
        ]);

        $area = Area::find($request->area_id);

//        return response($area->users()->get());
//        return response(Auth::user());
        if (! Gate::allows('store-metric-value', $area)) {
            $response = [
                'message' => 'User not authorised to perform the action',
            ];
            return response($response,403);
        }
//        $metric_value = Metric_value::find(1);
        $metric_value = Metric_value::where('area_id', $request->area_id)
            ->where('metric_id', $request->metric_id)
            ->where('period_id', $request->period_id)->first();
//       return response($metric_value);
        if ($metric_value){
            Metric_value::destroy($metric_value->id);
        }
        return Metric_value::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
