<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\Prono;
use App\User;

class PronosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // afficher les donnée dans une vue
    {
    
         $pronos =  Prono::get(); // recupere toute les donnée qu 'il ya dans pronos
        $matchs = Match::get();  // recupere toute les donnée qu 'il ya dans match
        
        return view ('pronos.index', compact('pronos', 'matchs')); // retourne une vue index
                                                                   // dans le dossier pronos et lui envoi les données recupérés
    }


    public function store(Request $request){ // Envoi les données 

        
        
        
        $prono = Prono::create($request->all());  // recupere toutes les info du formulaire et fait un insert dans la bdd
        return view('pronos.success'); // retourne une vue
        
    }

    public function update(Request $request, $id)
    {
       
        $prono = Prono::findOrFail($id);
        
        
        $prono->update($request->all());

        return redirect(route('accueil'));
        
        
    }

    public function edit($id)
    {
        $prono = Prono::findOrFail($id);
        
        return view('pronos.index', compact('prono'));
        
    }

}