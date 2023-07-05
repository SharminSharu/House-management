<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceReportController extends Controller
{
    

    public function filter(Request $request)
    {
        $flat_id = $request->flat_id;
        $query =Maintenance::query();

        if ($flat_id) {
            $query->where('flat_id', $flat_id);
        }
    
        $main= $query->get();
        $flat = Flat::all(); 
        // dd($flats);
    
        return view('adminltelayouts.maintenances.maintenancereport', compact('main', 'flat'));
        
    }
}
