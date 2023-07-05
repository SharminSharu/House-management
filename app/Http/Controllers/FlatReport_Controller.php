<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\Flat_assign;
use Illuminate\Http\Request;

class FlatReport_Controller extends Controller
{
    
    // public function index()
    // {
    //     $flatrep= Flat_assign::all();
        
    //     return view('adminltelayouts.flatreport.flatreport', compact('flatrep'));
    // }



    //flatreport controller-----------
    public function filter(Request $request)
{
    $start_date = $request->start_date;
    $end_date = $request->end_date;
    $flat_id = $request->flat_id;

    $query = Flat_assign::query();

    
    if ($start_date && $end_date) {
        $query->whereDate('assign_date', '>=', $start_date)
              ->whereDate('assign_date', '<=', $end_date);
    }
    
    if ($flat_id) {
        $query->where('flat_id', $flat_id);
    }

    $flatrep= $query->get();
    $flats = Flat::all(); 
    // dd($flats);

    return view('adminltelayouts.flatreport.flatreport', compact('flatrep', 'flats'));
}


// date format

    // public function filter(Request $request)
    // {
    //     $start_date = $request->start_date;
    //     $end_date = $request->end_date;

    //     $flatrep = Flat_assign::whereDate('assign_date', '>=', $start_date)
    //                        ->whereDate('assign_date', '<=', $end_date)
    //                        ->get();

    //     return view('adminltelayouts.flatreport.flatreport', compact('flatrep'));
    // }
    
}
