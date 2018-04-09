<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
   
        User::create([
            'nom' => 'BenBen',
            'prenom' => 'younes',
            'pseudo' => 'younesbenmammar',
            
            'email' => 'younesDta@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('admin42'),
        ]);
        User::create([
            'nom' => 'Dupont',
            'prenom' => 'Dupont',
            'pseudo' => 'Dupont',         
            'email' => 'dupont@chezlui.fr',
            'password' => bcrypt('user'),
        ]);
    }
    }

