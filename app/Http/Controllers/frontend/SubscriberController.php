<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        return view('frontend.layouts.footer');
    }
    public function store(Request $request)
    {
        $request->validate([
        
            'email' => 'required',
          
        ]);
        Subscriber::create($request->all());
        // dd($request->all());
        return redirect()->route('sub.index')->with('msg', 'Added to successfully!');
    }
    public function show()
    {
        $sub =  Subscriber::orderBy('id')->paginate(5);
        return view('adminltelayouts.subscriber.sub', compact('sub'));
    }
    public function destroy(string $id)
    {
        Subscriber::find($id)->delete();
        return redirect()->route('sub.show')->with('msg', 'Deleted to successfully!');;
    }
}
