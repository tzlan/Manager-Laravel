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
    public function traitement (Request $request)
    {
        //dd($request->all());
        $user = User::whereEmail($request->post('email'));
        dd(Hash::check($request->post('password'), $user->password));
    }
//    public function traitement (Request $request){
//       // dd($request->input('email'));
//        // $request->dd(['email, 'password']);
//        request()->validate([
//            'mail' => ['required'],
//            'password' => ['required'],
//        ]);
////        dd(request());
//        //$resultat= Auth::attempt($request->only['email', 'password']);
//               $resultat= Auth::attempt($request->only('email', 'password'));
////        $resultat= auth()->attempt([
////
////            'email'=> request('email'),
////            'password'=> Hash::make(request('password')),
//
//       // ]);
//       var_dump($resultat);
//        return'traitement de la connexion';
//    }
//    public function traitement (Request $request) {
//        $request->validate([
//            'mail' => ['required', 'email'],
//            'password' => ['required'],
//        ]);
//
//        $resultat = Auth::attempt($request->only('email', 'password'));
//
//        dd($resultat);
//        return 'traitement de la connexion';
//    }

}
