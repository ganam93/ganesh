<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Resources\UserResource;
use App\API_Models\Company;
use App\API_Models\Contact;
use App\API_Models\IdCard;
use App\API_Models\Sensor;
use App\API_Models\Visitor;

// Pages controller controls pages from sidebar only
class PagesController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        return redirect('/dashboard');
    }

    /* In  following functions data will be filtered according to user */
    /*-----------------------------------------------------------------*/

        // 1. Dashboard (Sidebar -> Dashboard)
        public function dashboard(){
            if(Auth::user()->hasRole('superadministrator')){
                $companies = Company::all();
                $idcards = IdCard::all();
                $sensors = Sensor::all();
                $visitors = Visitor::all();
                return view('pages.superadmin.dashboard', compact('companies', 'idcards', 'sensors', 'visitors'));
            }
            else if(Auth::user()->hasRole('administrator')) {
                return view('pages.admin.dashboard');
            }
            else{
                return view('pages.user.dashboard');
            }
        }



        // 2. Visitors (Sidebar -> Visitors)
        public function visitors()
        {
            if(Auth::user()->hasRole('superadministrator')){
                //write visitor related code here (for superadmin)

                $visitors = Visitor::all();
                return view('pages.superadmin.visitors', compact('visitors'));
            }
            else if(Auth::user()->hasRole('administrator')) {
                //write visitor related code here (for admin)


            }
            else{
                //write visitor related code here (for normal user)




            }
        }



        // 3. ID cards (Sidebar -> ID cards)
        public function idcards()
        {
            
            if(Auth::user()->hasRole('superadministrator')){
                //write idcards related code here (for superadmin)

                $idcards = IdCard::all();
                return view('pages.superadmin.idcards', compact('idcards'));
            }
            else if(Auth::user()->hasRole('administrator')) {
                //write idcards related code here (for admin)


            }
            else{
                //write idcards related code here (for normal user)




            }
        }



        // 4. Sensors (Sidebar -> Sensors)
        public function sensors()
        {
            if(Auth::user()->hasRole('superadministrator')){

                //write sensors related code here (for superadmin)

                $sensors = Sensor::all();
                return view('pages.superadmin.sensors', compact('sensors'));
            }
            else if(Auth::user()->hasRole('administrator')) {
                //write sensors related code here (for admin)


            }
            else{
                //write sensors related code here (for normal user)




            }
        }


    /* ---------------------------------------------------------- */







    /*------- Pages which is shown to the superadmin only --------*/

        // 5. Companies (Sidebar -> Companies)
        public function companies()
        {
            $company = Company::all();
            return view('pages.superadmin.companies', compact('company'));
        }
        
        // 6. Sensors (Sidebar -> Users)
        public function users()
        {
                $users = User::all();
                return view('pages.superadmin.users.index')->with('users', $users);
        }

    /* ---------------------------------------------------------- */





/*
    public function superadminaddCompany()
    {
    	return view('pages.superadmin.addCompany');
    }

    public function superadminaddIdCards()
    {
    	return view('pages.superadmin.addIdCards');
    }



    public function superadminaddSensors()
    {
    	return view('pages.superadmin.addSensors');
    }

    public function superadminaddBranch()
    {
    	return view('pages.superadmin.addBranch');
    }

    public function superadmincompanyDetails($id)
    {
        $company = Company::find($id);
    	return view('pages.superadmin.companyDetails', compact('id', 'company'));
    }   

*/




}
