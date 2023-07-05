<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Maintenance::paginate(5);
        return view('adminltelayouts.maintenances.maintenances', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $flat = Flat::all();
        return view('adminltelayouts.maintenances.addmaintenances', compact('flat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'flat_id' => 'required',
            'description' => 'required',
            'cost' => 'required',
            'reported_date' => 'required',
            'status' => 'required'
        ]);
        $maintenance = $request->all();
        Maintenance::create($maintenance);
        return redirect()->route('maintenance.index')->with('msg','Successfully Inserted!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $flats = Flat::all();
        $maintenance=Maintenance::find($id);
        return view('adminltelayouts.maintenances.editmaintenances', compact('maintenance', 'flats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'flat_id' => 'required',
            'description' => 'required',
            'cost' => 'required',
            'reported_date' => 'required',
            'status' => 'required'
        ]);
      
        Maintenance::find($id)->update($request->all());
        return redirect()->route('maintenance.index')->with('msg','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Maintenance::find($id)->delete();
        return redirect()->route('maintenance.index');
    }



}
