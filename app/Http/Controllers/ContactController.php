<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{

    public function index()
    {
        $contact = Contact::get();
        return view('contact.create', compact('contact'));
    }


    public function create()
    {
        $contact = Contact::get();
        return view ('contact.create', compact('contact'));
    }


    public function store(Request $request)
    {
        $match = Contact::create($request->all());
        return redirect(route('/welcome'));   
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
;
    }
}
