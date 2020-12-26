<?php

namespace App\Http\Controllers;


use App\Models\Tuteur;
use Illuminate\Http\Request;

class ControllerTuteur extends Controller
{
    public function lister_tuteurs()
    {
        if (auth()->check()) {
            $tuteurs = Tuteur::all();//Fonction qui liste les tuteurs
            return view('tuteurs/lister_tuteurs', [
                'tuteurs' => $tuteurs,
            ]);
        }else {
            return redirect('connexionUser')->withErrors([
                'email' => "Vous devez obligatoirement etre connecté pour avoir ces informations"
            ]);
        }
    }



        public function formulaire(){
        return view('tuteurs/inscription_tuteurs');
    }
    public function inscription_tuteurs(){


        request()->validate([
            'id' => ['required'],
            'name' => ['required'],
            'first_name' => ['required'],
            'date_n' => ['required'],
            'status' => ['required'],

        ]);

        $tuteurs = Tuteur::create([
            'id' => request('id'),
            'name' => request('name'),
            'first_name' => request('first_name'),
            'date_n' => request('date_n'),
            'status' => request('status'),

        ]);

        return view('prise_en_compte_inscription');

    }



}
