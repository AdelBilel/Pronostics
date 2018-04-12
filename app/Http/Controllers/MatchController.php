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
        $match = Match::findOrFail($id);
        
        return view('match.edit', compact('match'));
        
    }

    public function update(Request $request, $id)
    {
       
        $match = Match::findOrFail($id);
        
        
        $match->update($request->all());
        
        return redirect(route('match.index', $id));
    }

    
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
    }
}
