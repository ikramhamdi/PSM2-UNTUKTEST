<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    
    public function index()
    {
        
        Auth::user()->id;
        $patients = Patient::all();
        return view('patients.index')->with('patients', $patients);
    }

    
    public function create()
    {
        return view('patients.create');
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        Patient::create($input);
        return redirect('patient')->with('flash_message', 'patient Addedd!'); 
       
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
        return redirect('patient')->with('flash_message', 'Patient deleted!');
    }
}
