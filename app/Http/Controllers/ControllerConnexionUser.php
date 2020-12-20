<?php
//Petit com changement de PC
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class ControllerConnexionUser extends Controller
{
    public function accueil()
    {

        //var_dump(auth()->check());--> Verification si on est connecté

        if (auth()->guest()) {
            return redirect('/connexionUser')->withErrors([
                'email' => "Vous n'avez pas acces a cette page sans etre connecté",

            ]);
        }
        return view('redirection_entreprise_connecte');
    }
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

        if ($resultat){

            return redirect('redirection_entreprise_connecte');
        }

         return back()->withInput()->withErrors([

             'email'=>'Votre email est incorrect'
         ]);

    }

    public function deconnexion(){

        auth()->logout();
        return redirect('/');

    }



}
