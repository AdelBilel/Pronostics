<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;


class MatchController extends Controller
{

    public function index()
    {
        $match = Match::get();
        return view ('match.index', compact('match'));
    }

     
    public function create()
    {
        return view ('match.create');
        
    }


   
    
    public function store(Request $request){
        
        $match = Match::create($request->all());
        return redirect(route('match.index', $match));       
        
       
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
        $contact = Contact::find($id);
        $contact->delete();
    }
}
