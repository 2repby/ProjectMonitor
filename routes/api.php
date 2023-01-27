<?php

use App\Http\Controllers\MetricValuesController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MetricController;
use App\Http\Controllers\AreaController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Public routes
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/metrics', [MetricController::class, 'index']);
Route::get('/periods', [PeriodController::class, 'index']);
Route::get('/areas', [AreaController::class, 'index']);
Route::get('/projects/{id}', [ProjectController::class,'show']);
Route::get('/metrics/{id}', [MetricController::class,'metricsByProject']);
Route::get('/projects/search/{name}', [ProjectController::class,'search']);
Route::get('/projectswith/metrics/', [ProjectController::class,'withmetrics']);
Route::get('/projectswith/metrics/{id}', [ProjectController::class,'withmetrics']);
Route::get('/project/metricvalues/{id}', [ProjectController::class,'metric_values']);
Route::get('/metricvalues/{id}', [MetricValuesController::class,'metricValuesByProject']);
Route::get('/metricvalues/calcnormalized/{id}', [MetricValuesController::class,'calcNormalized']);

Route::post('/login', [AuthController::class,'login']);
Route::get('/areas/{id}/users', [AreaController::class,'users_by_area']);
Route::get('/users/{id}/areas', [UserController::class,'areas_by_user']);




// temp routes удалить
Route::get('/test', function (){
    $var = 999;
//    echo '$var';
    echo $var;
    echo("$var");
    print($var);


});


//Protected routes
Route::group(['middleware' => ['auth:sanctum']],  function (){
    Route::post('/user', [UserController::class,'store']);
    Route::post('/user/{id}', [UserController::class,'update']);
    Route::post('/projects', [ProjectController::class,'store']);
    Route::post('/metrics', [MetricController::class,'store']);
    Route::put('/projects/{id}', [ProjectController::class,'update']);
    Route::put('/metrics/{id}', [MetricController::class,'update']);
    Route::delete('/projects/{id}', [ProjectController::class,'destroy']);
    Route::delete('/metrics/{id}', [MetricController::class,'destroy']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/users', [UserController::class, 'index']);

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::delete('/user/{id}', [UserController::class,'destroy']);
    Route::post('/metricvalues', [MetricValuesController::class,'store']);
    Route::get('/users/{id_user}/addarea/{id_area}', [UserController::class,'add_area']);
    Route::get('/users/{id_user}/deletearea/{id_area}', [UserController::class,'delete_area']);
    Route::post('/user/{id_user}/addareas', [UserController::class,'add_areas']);
    Route::post('/user/{id_user}/deleteareas', [UserController::class,'delete_areas']);
});

