<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\Flat_assign;
use App\Models\Payment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    
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

        $list = Payment::with('flat_assign')->get();
        return view('adminltelayouts.payments.payment_list', compact('list','monthsInt'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      

        $flatassign = Flat_assign::all();
        return view('adminltelayouts.payments.add_payments', compact('flatassign'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   $request->validate([
            'flatassign_id'=>'required',
            'purpose' => 'required',
            'payment_date' => 'required',
            'paid' => 'required',
            'due' => 'required',
            
        ]);

        // dd($request->all());

  
        Payment::create($request->all());
    
        return redirect()->route('payment.index')->with('msg', 'Successfully Inserted.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(string $id)
    {
        $flatassign = Flat_assign::all();
        $payment= Payment::find($id);
        return view('adminltelayouts.payments.editpayments', compact('payment', 'flatassign'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'flatassign_id'=>'required',
            'purpose' => 'required',
            'payment_date' => 'required',
            'paid' => 'required',
            
        ]);
        Payment::find($id)->update($request->all());
        return redirect()->route('payment.index')->with('msg','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Payment::find($id)->delete();
        return redirect()->route('payment.index')->with('msg','Successfully Delected!');;
    }

 

    
    function getflat(Request $request)
    {

//   tenant_id::::
        $id = $request->input('id');

        $flID = Flat_assign::select('flat_id')
                ->where('tenant_id', $id)
                ->first();

        $assign=Flat_assign::select('assign_date')
                           ->first();
        
        $asDate= strtotime($assign->assign_date);
          
        $present =  strtotime(date('Y-M-d')); 
        $diff = abs($present - $asDate); 
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
        $monthsString = strval($months);
        $monthsInt = intval($monthsString);
        

        
        $data['flat'] = Flat::select("*")
                    ->where("id", $flID->flat_id)
                    ->first();
        
        
        $cost=Flat_assign::select('rent_cost')
                ->where('tenant_id', $id)
                ->first();
        $data['payment']=($cost->rent_cost)*$monthsInt;
        // dd($data['payment']);


        return response()->json($data);
  
    }

    function getdue(Request $request){
        // payment id
        $payment = $request->input('pmvalue');
        $paid = $request->input('pdvalue');
          
      
        $due=$payment-$paid;

        return response()->json($due);
    }

    


}
