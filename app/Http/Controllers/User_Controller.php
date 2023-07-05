<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user_list = User::all();
        $user_list = User::paginate(2);
   
        // dd($pro_list);
        return view ('adminltelayouts.users.user',compact('user_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminltelayouts.users.add_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phn_num' => 'required',
            'password' => 'required',
            'role' => 'required',
      
        ]);
    
        $d=$request->all();
        User::create($d);
    
        return redirect()->route('user.index')->with('msg', 'Successfully Inserted!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('adminltelayouts.users.user',compact('user_list'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
        return view('adminltelayouts.users.edit_user',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phn_num' => 'required',
            'password' => 'required',
            'role' => 'required',
      
        ]);
        User::find($id)->update($request->all());
      
        return redirect()->route('user.index')
                        ->with('msg','Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index')->with('msg','Deleted Successfully!');
    }


}
