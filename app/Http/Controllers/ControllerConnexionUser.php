<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;



class ControllerConnexionUser extends Controller
{

    //Renvoi la vue de la connexion
    public function formulaire(){
        return view('connexions/connexionUser');
    }

    public function traitement(){

        request()->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

       $resultat= auth()->attempt([

            'email'=> request('email'),
            'password'=> request('password'),
        ]);

       var_dump($resultat);
        return'traitement de la connexion';
    }

}
