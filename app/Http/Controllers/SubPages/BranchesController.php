<?php

namespace App\Http\Controllers\SubPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\API_Models\Company;
use App\API_Models\IdCard;
use App\API_Models\Branch;

class BranchesController extends Controller
{
    public function addbranch($id)
    {
        $company = Company::select('cname')->where('id',$id)->first();
        return view('pages.superadmin.addBranch', compact('id', 'company'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'addr_line1' => 'required|max:50',
            'city' => 'required|',
            'country' => 'required|max:21',
        ]);
        
        $branch = new Branch;
        $branch->company_id = $id;
        $branch->addr_line1 = $request->input('addr_line1');
        $branch->addr_line2 = $request->input('addr_line2');
        $branch->city = $request->input('city');
        $branch->state = $request->input('state');
        $branch->country = $request->input('country');
        $branch->zipcode = $request->input('zipcode');

        if($branch->save()){
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
