<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\Flat_assign;
use App\Models\Tenant;
use Illuminate\Http\Request;

class FlatAssign_Controller extends Controller
{
   
    public function index()
    {
        // $flat_agn_list = Flat_assign::with('tenant', 'flat')->get();
        $flat_agn_list = Flat_assign::orderBy('id','desc')->with('tenant', 'flat')->paginate(2);
       
        return view('adminltelayouts.flat_assign.flat_assign', compact('flat_agn_list'));
    }

    /**
     * Show the form for creating a new resource.
     */

     public function create()
     {
         $tenants = Tenant::all();
         $flats = Flat::all();
     
         $OccupiedFlat = $flats->contains('status', ['occupied']);
     
         if ($OccupiedFlat) {
             return 'error';
         } else {
             
             return view('adminltelayouts.flat_assign.add_flat_assign', compact('tenants','flats'));
         }
     }
     

     public function store(Request $request)
     {
         $request->validate([
             'tenant_id' => 'required',
             'flat_id' => 'required',
             'assign_date' => 'required|date',
             'rent_cost' => 'required|numeric',
         ]);
     
         $flat = Flat::findOrFail($request->flat_id);
     
         if ($flat->status === 'occupied') {
             return redirect()->back()->with('msg', 'Flat is already occupied');
         }
     
         Flat_assign::create($request->all());
     
         $flat->status = 'occupied';
         $flat->save();
     
         return redirect()->route('fagn.index')->with('msg', 'Flat Assign Successfully Inserted!');
     }
     
     
 
     /**
      * Store a newly created resource in storage.
      */
    //  public function store(Request $request)
    //  {
    //      $request->validate([
    //          'tenant_id' => 'required',
    //          'flat_id' => 'required',
    //          'assign_date' => 'required|date',
    //          'rent_cost' => 'required|numeric',
        
       
    //      ]);
     
         
    //      Flat_assign::create($request->all());
       
     
    //      return redirect()->route('fagn.index')->with('msg', 'Flat Assign Successfully Inserted!');
    //  }
 

    //  ----------------------------------------------------


    // public function create()
    // {
    //     $tenants = Tenant::all();
    //     $flats = Flat::all();
    
    //     $occupiedFlatExists = $flats->contains('status', 'occupied');
    
    //     if ($occupiedFlatExists) {
    //         return view('adminltelayouts.flat_assign.add_flat_assign', compact('tenants', 'flats'));
    //     } else {
    //         $emptyFlatNames = $flats->where('status', '');
    //         if ($emptyFlatNames->isEmpty()) {
    //             return redirect()->back()->with('error', 'No empty flats available');
    //         } else {
    //             return 'error';
    //         }
    //     }
    // }
    
    // /**
    //  * Store a newly created resource in storage.
    //  */

 

    //  ----------------------------------------------------
    
    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    public function show(Flat_assign $flat_agn_list)
    {
        $flat_agn_list->load('tenant', 'flat');

        return view ('adminltelayouts.flat_assign.flat_assign',compact('flat_agn_list'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    // public function edit(Flat_assign $flat_assign)
    public function edit(string $id)
    {
        $tenants = Tenant::all();
        $flats = Flat::all();
        $flat_assign= Flat_assign::find($id);
        return view('adminltelayouts.flat_assign.edit_flat_assign', compact('flat_assign', 'tenants', 'flats'));
        
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tenant_id' => 'required',
            'flat_id' => 'required',
            'assign_date' => 'required|date',
            'rent_cost' => 'required|numeric',
        ]);
 Flat_assign::find($id)->update($request->all());
        

        return redirect()->route('fagn.index')
            ->with('success', 'Flat Assign updated successfully');
    }
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Flat_assign::find($id)->delete();
        return redirect()->route('fagn.index')->with('msg','Flat Assign Deleted Successfully!');
    }
}


// ------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------

// Extra work for flat assign create ND STORE----------------

// public function create()
//     {
//         $tenants = Tenant::all();
//         $flats = Flat::all();
    
//         $OccupiedFlat = $flats->contains('status', ['occupied']);
    
//         if ($OccupiedFlat) {
//             return 'error';
//         } else {
            
//             return view('adminltelayouts.flat_assign.add_flat_assign', compact('tenants', 'flats'));
//         }
//     }
    
    

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         $request->validate([
//             'tenant_id' => 'required',
//             'flat_id' => 'required',
//             'assign_date' => 'required|date',
//             'rent_cost' => 'required|numeric',
       
      
//         ]);
    
        
//         Flat_assign::create($request->all());
      
    
//         return redirect()->route('fagn.index')->with('msg', 'Flat Assign Successfully Inserted!');
//     }
