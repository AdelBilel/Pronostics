<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ClassementController extends Controller
{
   public function index()
   {
       $name_score= User::orderBy('score', 'desc')->get(); // recupere dans la table user le score par ordre decroissant
       return view('classement.index', compact('name_score')); // retourne une vue avec les info qu'il y'a dans la VARIABLE name_score 
   }

}