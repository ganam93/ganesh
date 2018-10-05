<?php

namespace App\Http\Controllers\SubPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    // ------------ PART 1 ---------------- //
    //Routing subpages from Users 

    //NOTE : Check web.php -> companies section for better understanding
    public function add(){
        return view('pages.superadmin.users.create');
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


    public function store(Request $request)
    {
        //
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
