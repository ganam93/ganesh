<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitorsController extends Controller
{
    
    //To get details of all visitors in database with GET request
    public function index()
    {
        $visitors = visitors::all();

        return VisitorsResource :: collection($visitors);
}
//To store details of new visitors in database with POST request
public function store(Request $request)
{
    $visitors = new visitors;
    $visitors->id = $request->input('id');
    $visitors->id_card = $request->input('id_card');
    $visitors->name = $request->input('name');
    $visitors->contact = $request->input('contact');
    $visitors->check_in = $request->input('check_in');
    $visitors->check_out = $request->input('check_out');
    $visitors->company_id = $request->input('company_id');
    $visitors->Branch_id = $request->input('Branch_id');

    if($company->save()){
      return new VisitorsResource($visitors);
    }
    return response()->json(['error' => 'Something went wrong'], 500);
}

}

