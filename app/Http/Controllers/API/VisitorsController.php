<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitorsController extends Controller
{
    /* 
    //To get details of all visitors in database with GET request
    public function index()
    {
        $visitors = visitors::all();

        return VisitorsResource :: collection($visitors);
}
To store details of new visitors in database with POST request
public function store(Request $request)
{
    $visitors = new visitors;
    $visitors->sr_no = $request->input('sr_no');
    $company->id_card = $request->input('id_card');
    $company->GST = $request->input('GST');
    $company->reg_no = $request->input('reg_no');
    $company->website = $request->input('website');
    $company->addr_line1 = $request->input('addr_line1');
    $company->addr_line2 = $request->input('addr_line2');
    $company->city = $request->input('city');
    $company->country = $request->input('country');
    $company->zipcode = $request->input('zipcode');

    if($company->save()){
      return new CompanyResource($company);
    }
    return response()->json(['error' => 'Something went wrong'], 500);
}*/

}

