<?php
//Petit com changement de PC
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class ControllerConnexionUser extends Controller
{

    //Renvoi la vue de la connexion
    public function formulaire(){
        return view('connexions/connexionUser');
    }

    public function traitement (Request $request) {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $resultat = Auth::attempt($request->only('email', 'password'));
        var_dump($resultat);
        
        return 'traitement de la connexion';
    }


}
