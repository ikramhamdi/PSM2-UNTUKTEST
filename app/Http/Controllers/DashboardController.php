<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('manager')){
            return view('dashboard.managerdash');
        }else if(Auth::user()->hasRole('staff')){
            return view('dashboard.staffdash');
        }
        return view('patients.index');
    }

    public function managePatient()
    { 
        if(Auth::user()->id){
            return view('patients.index');
        }
            //return view('patients.index');
    }

    public function manageStaff()
    { 
            return view('staffs.manageStaff');
    }

    public function postcreate()
    {
        return view('postcreate');
    }
}
