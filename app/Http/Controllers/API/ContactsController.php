<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\API_Models\Contact;
use App\Http\Resources\ContactResource;

class ContactsController extends Controller
{

    public function index()
    {
        $contact = Contact::all();

        if($contact){
            return $contact;
        }
        else{
            return "Data not found";
        }

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $contact = new Contact;
        //$comp = $company::create($request->except('_token'));
        $contact->name = $request->input('name');
        $contact->designation = $request->input('designation');
        $contact->mobile_no = $request->input('mobile_no');
        $contact->landline_no = $request->input('landline_no');
        $contact->email = $request->input('email');
        $contact->company_id = $request->input('company_id');
        $contact->branch_id = $request->input('branch_id');

        if($contact->save()){
          return new ContactResource($contact);
        }

        return response()->json(['error' => 'Something went wrong'], 500);
    }


    public function show($id)
    {

        $contact = Contact::where('id', $id)->get();
        if($contact){
            return $contact;
        }
        return response()->json(['error' => 'Data not found'], 404);
    }



    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        if($company==null){
            return response()->json(['error' => 'Data not found'], 404);
        }

        //$comp = $company::create($request->except('_token'));
        $contact->name = $request->input('name');
        $contact->designation = $request->input('designation');
        $contact->mobile_no = $request->input('mobile_no');
        $contact->landline_no = $request->input('landline_no');
        $contact->email = $request->input('email');
        $contact->company_id = $request->input('company_id');
        $contact->branch_id = $request->input('branch_id');

        if($contact->save()){
          return new ContactResource($contact);
        }
        return response()->json(['error' => 'User is not allowed to make chnages'], 403);
    }


    public function destroy($id)
    {
        $contact = Contact::findOrFail($cid);

        if($company->delete()){
          return response()->json(['Result' => 'Suceess'], 200);
        }
        return response()->json(['error' => 'Something went wrong'], 500)
    }
}
