<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Bill::orderBy('id')->paginate(3);
        
        return view('adminltelayouts.bills.bills', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminltelayouts.bills.addbills');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required'
        ]);
        // $fl = $request->all();
        Bill::create($request->all());
        return redirect()->route('bill.index');
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
        $bill = Bill::find($id);
        return view('adminltelayouts.bills.editbills', compact('bill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required'
        ]);
        $bill = $request->all();
        Bill::find($id)->update($bill);
        return redirect()->route('bill.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bill::find($id)->delete();
        return redirect()->route('bill.index');
    }
}