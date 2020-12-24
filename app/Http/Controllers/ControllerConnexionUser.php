<?php
//Petit com changement de PC
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class ControllerConnexionUser extends Controller
{
    public function __construct(){

       $this->middleware('auth')->only(['accueil']);
    }
    public function accueil()
    {

        var_dump(auth()->check());//--> Verification si on est connecté

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

    $user = Auth::user();
        if($resultat ){
            if ($user->entreprise_id){
             return redirect('redirection_entreprise_connecte');
            }
            if($user->jury_id){
                return redirect('redirection_jurys_connecte');
            }
            if($user->tuteur_id){
                return redirect('redirection_tuteurs_connecte');
            }
            if($user->students_id){
                return redirect('redirection_students_connecte');
            }

        }

         return back()->withInput()->withErrors([

             'email'=>'Votre email ou mot de passe est incorrect',
             'password'=>'Votre email ou mot de passe est incorrect'
         ]);

    }

    public function deconnexion(){

        auth()->logout();
        return redirect('/');

    }



}
