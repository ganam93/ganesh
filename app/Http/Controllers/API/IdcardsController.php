<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\IdcardResource;
use App\API_Models\Idcard;

class IdcardsController extends Controller
{
    public function index()
    {
        $idcard = Idcard::all();
        return $idcard;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $idcard = new Idcard;
        $idcard->major = $request->input('major');
        $idcard->minor = $request->input('minor');
        $idcard->issued_date = $request->input('issued_date');
        $idcard->expiry_date = $request->input('expiry_date');
        $idcard->company_id = $request->input('company_id');
        $idcard->branch_id = $request->input('branch_id');

        if($sensor->save()){
          return new IdcardResource($idcard);
        }

        return response()->json(['error' => 'Something went wrong'], 500);
    }

    public function show($id)
    {
        $idcard = Idcard::find($id);
        if($idcard){
            return new IdcardResource($sensor);
        }
        return response()->json(['error' => 'Data not found'], 404);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $idcard = Idcard::findOrFail($id);
        $idcard->major = $request->input('major');
        $idcard->minor = $request->input('minor');
        $idcard->issued_date = $request->input('issued_date');
        $idcard->expiry_date = $request->input('expiry_date');
        $idcard->company_id = $request->input('company_id');
        $idcard->branch_id = $request->input('branch_id');

        if($sensor->save()){
          return new IdcardResource($idcard);
        }

        return response()->json(['error' => 'Something went wrong'], 500);

    }

    public function destroy($id)
    {
        $idcard = Idcard::findOrFail($id);

        if($idcard->delete()){
          return response()->json(['Success' => 'True'], 500);
        }
        else
            return response()->json(['error' => 'Something went wrong'], 500);
    }
}
