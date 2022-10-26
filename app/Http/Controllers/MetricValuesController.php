<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Metric_value;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class MetricValuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
