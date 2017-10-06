<?php

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Activity;

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

Route::get('/employee/{employee_id}/activities', function ($employee_id) {
    $employee = Employee::find($employee_id);

    if (request()->ajax())
    {
        if($employee == NULL){
            return response()->json([
                'status' => 'ok',
                'activities' => [],
            ]);
        }

        return response()->json([
            'status' => 'ok',
            'activities' => $employee->activities,
        ]);
    }

    return response('Forbidden', 403);
});

Route::get('/employee/{employee_id}', function ($employee_id) {
    $employee = Employee::find($employee_id);

    if (request()->ajax())
    {
        if($employee == NULL){
            return response()->json([
                'status' => 'ok',
                'employee' => NULL,
            ]);
        }

        return response()->json([
            'status' => 'ok',
            'employee' => $employee,
        ]);
    }

    return response('Forbidden', 403);
});