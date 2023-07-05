<?php

namespace App\Http\Controllers;

use App\Models\Flat_assign;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantReportController extends Controller
{
    function filter(Request $request)
    {
        $ten_id = $request->tenant_id;
        $query = Tenant::query();
        if ($ten_id) {
            $query->where('id', $ten_id);
        }
        $main = $query->get();
        $tenant = Tenant::all();
        return view('adminltelayouts.tenants.tenantreport', compact('main', 'tenant'));
    }

   
}
