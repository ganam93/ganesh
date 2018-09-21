<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
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
    }

    
    //To get details of particular company in database with GET request
    public function show($cid)
    {
        $company = Company::findOrFail($cid);

        return new CompanyResource($company);
    }



    //To update details of particular company in database with PUT request
    public function update(Request $request, $cid)
    {
        $company = Company::findOrFail($cid);

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
    }

    

    //To delete  details of a companay from database with DELETE request
    public function destroy($cid)
    {
        $company = Company::findOrFail($cid);

        if($company->delete()){
          echo 'success';
        }
    }
}
