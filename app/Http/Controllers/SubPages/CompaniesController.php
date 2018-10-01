<?php

namespace App\Http\Controllers\SubPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\API_Models\Company;

class CompaniesController extends Controller
{
    public function index()
    {
        $company = Company::all();
        return view('pages.superadmin.companies', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
          return redirect('/superadmin/companies');
        }

        return response()->json(['error' => 'Something went wrong'], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
