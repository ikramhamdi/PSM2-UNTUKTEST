<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    

    public function index()
    {
        
        Auth::user()->id;
        $staffs = User::all();
        

        

        return view('staffs.index')->with('staffs', $staffs);

    }

    
    public function create()
    {
        return view('auth.register');
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect('dashboard/manageStaff')->with('flash_message', 'staff Addedd!'); 
       
    }

    
    public function show($id)
    {
        $patient = Patient::find($id);
        return view('patients.show')->with('patients', $patient);
    }

    
    public function edit($id)
    {

        $patient = Patient::find($id);
        return view('patients.edit')->with('patients', $patient);
        
       
    }

    
    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
        $input = $request->all();
        $patient->update($input);
        return redirect('patient')->with('flash_message', 'student Updated!');  
        
    }

    
    public function destroy($id)
    {
        Patient::destroy($id);
        return redirect('dashboard/manageStaff')->with('flash_message', 'Patient deleted!');
    }
}
