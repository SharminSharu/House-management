<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\Flat_assign;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentReportController extends Controller
{
    public function filter(Request $request)
{
    $assign=Flat_assign::select('assign_date')
    ->first();

    $asDate= strtotime($assign->assign_date);

    $present =  strtotime(date('Y-M-d')); 
    $diff = abs($present - $asDate); 
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
    $monthsString = strval($months);
    $monthsInt = intval($monthsString);


    $start_date = $request->start_date;
    $end_date = $request->end_date;
    // $flatassign_id = $request->flatassign_id;

    $query = Payment::query();

    
    if ($start_date && $end_date) {
        $query->whereDate('payment_date', '>=', $start_date)
              ->whereDate('payment_date', '<=', $end_date);
    }
    
    // if ($flatassign_id) {
    //     $query->where('flat_id', $flatassign_id);
    // }

    $pay= $query->get();
    // $flats = Flat::all(); 
    // dd($flats);

    return view('adminltelayouts.payments.paymentreport', compact('pay','monthsInt'));
}

}
