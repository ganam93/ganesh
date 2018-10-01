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

    public function superadmindashboard()
    {
    	return view('pages.superadmin.dashboard');
    }

    public function superadmincompanies()
    {
    	return view('pages.superadmin.companies');
    }

    public function superadminaddCompany()
    {
    	return view('pages.superadmin.addCompany');
    }

    public function superadminvisitors()
    {
    	return view('pages.superadmin.visitors');
    }

    public function superadminidcards()
    {
    	return view('pages.superadmin.idcards');
    }

    public function superadminaddIdCards()
    {
    	return view('pages.superadmin.addIdCards');
    }

    public function superadminsensors()
    {
    	return view('pages.superadmin.sensors');
    }

    public function superadminaddSensors()
    {
    	return view('pages.superadmin.addSensors');
    }

    public function superadminaddBranch()
    {
    	return view('pages.superadmin.addBranch');
    }

    public function superadminusers()
    {
        if(Auth::user()->hasRole('superadministrator')){
            return view('pages.superadmin.users');
        }
        else{
            return view('addCompany');
        }
    }




}
