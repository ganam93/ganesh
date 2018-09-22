<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\API_Models\Visitor;
use App\Http\Resources\VisitorResource;


class VisitorsController extends Controller
{
    
    //To get details of all visitors in database with GET request
    public function index()
    {
        $visitors = Visitor::all();

        return VisitorResource :: collection($visitors);
    }

    
    public function create()
    {
        //
    }

    //To store details of new visitors in database with POST request
    public function store(Request $request)
    {
        $visitors = new Visitor;
        $visitors->id_card = $request->input('id_card');
        $visitors->name = $request->input('name');
        $visitors->contact = $request->input('contact');
        $visitors->check_in = $request->input('check_in');
        $visitors->check_out = $request->input('check_out');
        $visitors->company_id = $request->input('company_id');
        $visitors->Branch_id = $request->input('Branch_id');

        if($visitors->save()){
        return new VisitorResource($visitors);
        }
        return response()->json(['error' => 'Something went wrong'], 500);
    }

    
  
    public function show($id)
    {
        $visitors = Visitor::find($id);
        if($visitors){
            return new VisitorResource($visitors);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        $visitors = Visitor::findOrFail($id);
        $visitors->id_card = $request->input('id_card');
        $visitors->name = $request->input('name');
        $visitors->contact = $request->input('contact');
        $visitors->check_in = $request->input('check_in');
        $visitors->check_out = $request->input('check_out');
        $visitors->company_id = $request->input('company_id');
        $visitors->Branch_id = $request->input('Branch_id');

        if($visitors->save()){
          return new VisitorResource($visitors);
        }

        return response()->json(['error' => 'Something went wrong'], 500);
    }

    
    public function destroy($id)
    {
       $visitors = Visitor::findOrFail($id);

        if($visitors->delete()){
          return response()->json(['Success' => 'True'], 500);
        }
        else
            return response()->json(['error' => 'Something went wrong'], 500);
    }
}
