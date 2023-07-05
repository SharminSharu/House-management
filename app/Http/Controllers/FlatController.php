<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Http\Request;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flat = Flat::orderBy('flat_name')->paginate(5);
        return view('adminltelayouts.flats.flats', compact('flat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminltelayouts.flats.addflats');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'flat_name' => 'required',
            'floor' => 'required',
            'flat_size' => 'required',
            'bed_room' => 'required',
            'balcony' => 'required',
            'wash_room' => 'required',
            'rent_cost' => 'required',
            'status' => 'required',
        ]);
        // $fl = $request->all();
        Flat::create($request->all());
        return redirect()->route('flat.index')->with('msg', 'Flats Successfully Inserted');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return view('adminltelayouts.flats.flats', compact('flat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $flat = Flat::find($id);
        return view('adminltelayouts.flats.editflats', compact('flat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'flat_name' => 'required',
            'floor' => 'required',
            'flat_size' => 'required',
            'bed_room' => 'required',
            'balcony' => 'required',
            'wash_room' => 'required',
            'rent_cost' => 'required',
            'status' => 'required',
        ]);
        $flat=$request->all();
        Flat::find($id)->update($flat);
        return redirect()->route('flat.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Flat::find($id)->delete();
        return redirect()->route('flat.index')->with('msg', 'Deleted Successfully!');
    }
}