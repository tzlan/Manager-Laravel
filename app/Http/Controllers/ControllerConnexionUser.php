<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ControllerConnexionUser extends Controller
{

    //Renvoi la vue de la connexion
    public function formulaire(){
        return view('connexions/connexionUser');
    }

    public function traitement(){

        request()->validate([
            'mail' => ['required'],
            'password' => ['required'],
        ]);
//        dd(request());
        $resultat= auth()->attempt([

            'email'=> request('email'),
            'password'=> Hash::make(request('password')),
        ]);
       var_dump($resultat);
        return'traitement de la connexion';
    }

}
