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

        return ContactResource :: collection($contact);
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
