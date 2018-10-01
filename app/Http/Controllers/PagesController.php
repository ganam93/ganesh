<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Resources\UserResource;

class PagesController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        if(Auth::user()->hasRole('superadministrator')){
            return view('pages.superadmin.dashboard');
        }
        else if(Auth::user()->hasRole('administrator')) {
            return view('pages.admin.dashboard');
        }
        else{
            return view('pages.admin.dashboard');
        }
    	
    }

    public function companies()
    {
    	return view('pages.superadmin.comapnies');
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

            $users = UserResource::collection(User::all());
            return view('pages.users')->with('users', $users);
        }
        else{
            return view('addCompany');
        }
    }




}
