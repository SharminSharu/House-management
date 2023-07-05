<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Tenant_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $ten_list = Tenant::all();
      
        $ten_list = Tenant::orderBy('name')->paginate(3);
    
        return view ('adminltelayouts.tenants.tenant',compact('ten_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminltelayouts.tenants.add_tenant');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phn_no' => 'required',
            'nid' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'occupation' => 'required',
            'photo' => 'required|image|mimes:jpeg,jpg,png',
            'per_address' => 'required',
            'move_in' => 'required',
            'family_member' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();
// -----------Tech-1-----------

        // if ($image = $request->file('photo')) {
        //     $destinationPath = 'uploads/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['photo'] = "$profileImage";
        // }

      
// -----------Tech-2-----------
        $fileName=time().'_'.$request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads/'),$fileName);
        $input['photo'] = "$fileName";
        Tenant::create($input);
    
        return redirect()->route('tenant.index')->with('msg', 'Successfully Inserted!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        return view('adminltelayouts.tenants.tenant',compact('ten_list'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tenant=Tenant::find($id);
        return view('adminltelayouts.tenants.edit_tenant',compact('tenant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'phn_no' => 'required',
            'nid' => 'required',
            'gender' => 'required',
            'occupation' => 'required',
            'photo' => 'required|image|mimes:jpeg,jpg,png',
            'per_address' => 'required',
            'move_in' => 'required',
            'family_member' => 'required',
            'status' => 'required',
        ]);
    
    
        $input = $request->all();
        // dd($input);
          
// -----------Tech-1-----------

        // if ($image = $request->file('photo')) {
        //     $destinationPath = 'uploads/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['photo'] = "$profileImage";
        // }else{
        //     unset($input['photo']);
        // }
      
// -----------Tech-2-----------
        $fileName=time().'_'.$request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads/'),$fileName);
        $input['photo'] = "$fileName";
        
        Tenant::find($id)->update($input);
      
        return redirect()->route('tenant.index')
                        ->with('msg','Updated successfully.');
    }
  

    public function destroy(string $id)
    {
        Tenant::find($id)->delete();
        return redirect()->route('tenant.index')->with('msg','Deleted Successfully!');
    }
}
