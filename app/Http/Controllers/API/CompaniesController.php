<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\API_Models\Company;
use App\Http\Resources\CompanyResource;

class CompaniesController extends Controller
{
    //To get details of all companies in database with GET request
    public function index()
    {
        $company = Company::all();

        return CompanyResource :: collection($company);
    }

    //To store details of new company in database with POST request
    public function store(Request $request)
    {
        $company = new Company;


        $company->cname = $request->input('cname');
        $company->pan = $request->input('pan');
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
    }

    
    //To get details of particular company in database with GET request
    public function show($id)
    {
        $company = Company::findOrFail($id);
        if($company){
            return new CompanyResource($company);
        }
        return response()->json(['error' => 'Data not found'], 404);
        
    }



    //To update details of particular company in database with PUT request
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);

        $company->cname = $request->input('cname');
        $company->country = $request->input('country');
        $company->pan = $request->input('pan');
        $company->GST = $request->input('GST');
        $company->reg_no = $request->input('reg_no');
        $company->website = $request->input('website');
        $company->addr_line1 = $request->input('addr_line1');
        $company->addr_line2 = $request->input('addr_line2');
        $company->city = $request->input('city');
        $company->zipcode = $request->input('zipcode');

        if($company->save()){
          return new CompanyResource($company);
        }
        return response()->json(['error' => 'User is not allowed to make chnages'], 403);
    }

    

    //To delete  details of a companay from database with DELETE request
    public function destroy($cid)
    {
        $company = Company::findOrFail($cid);

        if($company->delete()){
          echo 'success';
        }
        return response()->json(['error' => 'Something went wrong'], 500);
    }
}
