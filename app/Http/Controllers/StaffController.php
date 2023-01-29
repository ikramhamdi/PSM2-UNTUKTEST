<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('staffs.index')->with('users', $users);
    }

    
    public function create()
    {
        return view('staffs.create');
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect('staff')->with('flash_message', 'patient Addedd!'); 
       
    }

    
    public function show($id)
    {
        $users = User::find($id);
        return view('staffs.show')->with('users', $users);
    }

    
    public function edit($id)
    {

        $user = User::find($id);
        return view('staffs.edit')->with('users', $user);
        
       
    }

    
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('staff')->with('flash_message', 'student Updated!');  
        
    }

    
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('staff')->with('flash_message', 'Patient deleted!');
    }
}
