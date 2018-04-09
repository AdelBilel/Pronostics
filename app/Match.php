<?php

namespace App;

use Illuminate\Notifications\Notifiable;


use Illuminate\Database\Eloquent\Model;

class Match extends Model

{
    use Notifiable;

    protected $fillable = ['equipe1', 'equipe2', 'resultat1', 'resultat2'];
    
    public $table = "match";
    
    public $timestamps = false;
}