<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Prono extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = "prono";  // il va interagir avec la table prono

    protected $fillable = ['match_id', 'user_id', 'score1', 'score2', 'pseudo', 'equipe1', 'equipe2', 'point']; // les champs qui doivent etre rempli
    
    public $timestamps = false; // pas besoin du timestamps

}
