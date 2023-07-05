<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseReportController extends Controller
{
    public function filter(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
  
    
        $query = Expense::query();
    
        
        if ($start_date && $end_date) {
            $query->whereDate('date', '>=', $start_date)
                  ->whereDate('date', '<=', $end_date);
        }
        
    
        $exrep= $query->get();
 
        // dd($flats);
    
        return view('adminltelayouts.expense.expensereport', compact('exrep' ));
    }
}
