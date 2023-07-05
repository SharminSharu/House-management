<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Http\Request;

class FlatReportController extends Controller
{
    public function filter(Request $request)
    {
        $status = $request->status;
        $query = Flat::query();
        if ($status) {
            $query->where('status', $status);
        }
        $main = $query->get();
        // $flat = Flat::all();
        return view('adminltelayouts.flats.flatreport', compact('main'));

    }
}
