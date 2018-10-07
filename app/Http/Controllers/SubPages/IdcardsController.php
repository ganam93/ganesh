<?php

namespace App\Http\Controllers\SubPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\API_Models\Sensor;
use App\API_Models\Company;
use App\API_Models\Branch;
use App\API_Models\IdCard;

class IdcardsController extends Controller
{
    // ------------ PART 1 ---------------- //
    //Routing subpages from idcards 

    //NOTE : Check web.php -> companies section for better understanding

    public function addIdcard($id){

        $branches = Branch::select('id','city')->where('company_id', $id)->get();
        $company = Company::select('cname')->where('id',$id)->first();

        return view('pages.superadmin.addIdCards', compact('id','branches', 'company'));
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
            'major' => 'required',
            'minor' => 'required',
            'issued_date' => 'required',
            'expiry_date' => 'required',
            'branch_id' => 'required',
        ]);

        $idcard = new Idcard;
        $idcard->major = $request->input('major');
        $idcard->minor = $request->input('minor');
        $idcard->issued_date = $request->input('issued_date');
        $idcard->expiry_date = $request->input('expiry_date');
        $idcard->company_id = $id;
        $idcard->branch_id = $request->input('branch_id');

        if($idcard->save()){
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
