<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
    	return view('pages.superadmin.dashboard');
    }

    public function companies()
    {
    	return view('pages.superadmin.companies');
    }

    public function addCompany()
    {
    	return view('pages.superadmin.addCompany');
    }

    public function Visitors()
    {
    	return view('pages.visitors');
    }

    public function idcards()
    {
    	
    }

    public function sensors()
    {
    	
    }

    public function users()
    {
        if(Auth::user()->hasRole('superadministrator')){
            return view('pages.users');
        }
        else{
            return view('addCompany');
        }
    }




}
