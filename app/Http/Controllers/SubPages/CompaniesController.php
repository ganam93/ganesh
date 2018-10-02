<?php

namespace App\Http\Controllers\SubPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\API_Models\Company;

class CompaniesController extends Controller
{

    // ------------ PART 1 ---------------- //
    //Routing subpages from companies 

    public function add()
    {
    	return view('pages.superadmin.addCompany');
    }

    public function show($id)
    {
        $company = Company::find($id);
    	return view('pages.superadmin.companyDetails', compact('id', 'company'));
    }





















    // ------------ PART 2 ---------------- //
    //To control resources i.e. CRUD Operations
    public function index()
    {
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //$input = Input::all();
        $company = new Company;
        $company->cname = $request->input('cname');
        $company->pan = $request->input('pan');
        $company->GST = $request->input('GST');
        $company->reg_no = $request->input('registration');
        $company->website = $request->input('website');
        $company->addr_line1 = $request->input('comapnyaddr');
        $company->addr_line2 = $request->input('addr_line2');
        $company->city = $request->input('city');
        $company->country = $request->input('country');
        $company->zipcode = $request->input('zipcode');

        if($company->save()){
          return redirect('/companies');
        }

        return response()->json(['error' => 'Something went wrong'], 500);
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
