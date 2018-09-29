<?php

namespace App\Http\Controllers\API;

use App\API_Models\Sensor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\SensorResource;


class SensorsController extends Controller
{
    public function index()
    {
        $sensor = Sensor::all();
        return $sensor;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $sensor = new Sensor;
        $sensor->manufacturer = $request->input('manufacturer');
        $sensor->model = $request->input('model');
        $sensor->location = $request->input('location');
        $sensor->company_id = $request->input('company_id');
        $sensor->branch_id = $request->input('branch_id');

        if($sensor->save()){
          return new SensorResource($sensor);
        }

        return response()->json(['error' => 'Something went wrong'], 500);
    }

    public function show($id)
    {
        $sensor = Sensor::find($id);
        if($sensor){
            return new SensorResource($sensor);
        }
        return response()->json(['error' => 'Data not found'], 404);
        
    }

    public function edit(Sensor $sensor)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $sensor = Sensor::findOrFail($id);
        $sensor->manufacturer = $request->input('manufacturer');
        $sensor->model = $request->input('model');
        $sensor->location = $request->input('location');
        $sensor->company_id = $request->input('company_id');
        $sensor->branch_id = $request->input('branch_id');

        if($sensor->save()){
          return new SensorResource($sensor);
        }

        return response()->json(['error' => 'Something went wrong'], 500);
    }

    public function destroy($id)
    {
        $sensor = Sensor::findOrFail($id);

        if($sensor->delete()){
          return response()->json(['Success' => 'True'], 500);
        }
        else
            return response()->json(['error' => 'Something went wrong'], 500);
    }
}
