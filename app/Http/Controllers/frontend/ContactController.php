<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phn_num' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        Contact::create($request->all());
        return redirect()->route('ct.index');
    }
    public function show()
    {
        $msg = Contact::orderBy('id')->paginate(5);
        return view('adminltelayouts.contacts.contacts', compact('msg'));
    }
    public function destroy(string $id)
    {
        Contact::find($id)->delete();
        return redirect()->route('ct.show');
    }
}
