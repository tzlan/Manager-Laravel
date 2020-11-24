<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerConnexionUser extends Controller
{

    //Renvoi la vue de la connexion
    public function formulaire(){
        return view('connexions/connexionS');
    }

    public function traitement(){

        return'traitement de la connexion';
    }

}
