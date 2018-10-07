<?php

namespace App\Http\Controllers\SubPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\API_Models\Sensor;
use App\API_Models\Company;
use App\API_Models\Branch;

class SensorsController extends Controller
{
    // ------------ PART 1 ---------------- //
    //Routing subpages from Sensors 

    //NOTE : Check web.php -> companies section for better understanding

    public function addSensor($id){

        $branches = Branch::select('id','city')->where('company_id', $id)->get();
        $company = Company::select('cname')->where('id',$id)->first();
        
        return view('pages.superadmin.addSensors', compact('id','branches', 'company'));
    }


    
    // ------------ PART 2 ---------------- //
    //To control resources i.e. CRUD Operations

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request, $id)
    {
        $request->validate([
            'manufacturer' => 'bail|required|max:255',
            'model' => 'required|max:10',
            'location' => 'required',
            'branch_id' => 'required',
        ]);

        $sensor = new Sensor;
        $sensor->manufacturer = $request->input('manufacturer');
        $sensor->model = $request->input('model');
        $sensor->location = $request->input('location');
        $sensor->company_id = $id;
        $sensor->branch_id = $request->input('branch_id');

        if($sensor->save()){
            return redirect('/companies/'.$id);        
        }

        return response()->json(['error' => 'Something went wrong'], 500);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
