<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\API_Models\Branch;
use App\Http\Resources\BranchResource;

class BranchesController extends Controller
{
   
    public function index()
    {
        $branch = Branch::all();

        return BranchResource :: collection($branch);
    }

  
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        $branch = new Branch;
        $branch->company_id = $request->input('company_id');
        $branch->addr_line1 = $request->input('addr_line1');
        $branch->addr_line2 = $request->input('addr_line2');
        $branch->city = $request->input('city');
        $branch->state = $request->input('state');
        $branch->country = $request->input('country');
        $branch->zipcode = $request->input('zipcode');

        if($branch->save()){
          return new BranchResource($branch);
        }

        return response()->json(['error' => 'Something went wrong'], 500);
    }

  
    public function show($id)
    {
        $branch = Branch::find($id);
        if($branch){
            return new BranchResource($branch);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        $branch = Branch::findOrFail($id);
        $branch->company_id = $request->input('company_id');
        $branch->addr_line1 = $request->input('addr_line1');
        $branch->addr_line2 = $request->input('addr_line2');
        $branch->city = $request->input('city');
        $branch->state = $request->input('state');
        $branch->country = $request->input('country');
        $branch->zipcode = $request->input('zipcode');

        if($branch->save()){
          return new BranchResource($branch);
        }

        return response()->json(['error' => 'Something went wrong'], 500);
    }

    
    public function destroy($id)
    {
        $branch = Branch::findOrFail($id);

        if($branch->delete()){
          return response()->json(['Success' => 'True'], 500);
        }
        else
            return response()->json(['error' => 'Something went wrong'], 500);
    }
}
