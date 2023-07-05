<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Expense_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $ex_list = Expense::all();
        $ex_list = Expense::orderBy('name')->paginate(3);
        // dd($pro_list);
        return view ('adminltelayouts.expense.expense',compact('ex_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminltelayouts.expense.add_expense');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cost' => 'required',
            'date' => 'required',
            
      
        ]);
        Expense::create($request->all());
    
        return redirect()->route('expense.index')->with('msg', 'Successfully Inserted!');
      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $expense=Expense::find($id);
      
$expense_types =Expense::pluck('name', 'id');
        return view('adminltelayouts.expense.edit_expense',compact('expense','expense_types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required', 
            'cost' => 'required',
            'date' => 'required',
         
      
        ]);
        Expense::find($id)->update($request->all());
      
        return redirect()->route('expense.index')
                        ->with('msg','Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Expense::find($id)->delete();
        return redirect()->route('expense.index')->with('msg','Deleted Successfully!');
    }
}
