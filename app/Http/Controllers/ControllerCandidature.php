<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Candidature;
use Illuminate\Support\Facades\Auth;

class ControllerCandidature extends Controller
{
    public function inscription_candidature(){




        request()->validate([
            'id' => ['required'],

            'entreprise_id' =>  ['required'],
            'offre_id' =>  ['required'],
            'students_id' =>  ['required'],
        ]);

        $candidature = Candidature::create([

            'id' => request('id'),

            'entreprise_id' => request('entreprise_id'),
            'offre_id' => request('offre_id'),
            'students_id' => request('students_id'),
        ]);

        return view('prise_en_compte_postuler');
    }


    public function lister_candidatures(){
        $user = Auth::user();

        //Candidature::where('entreprise_id', xxx) ->get();

            $candidatures = Candidature::all();


        return view('candidatures/lister_candidatures',[
            'candidatures'=> $candidatures,
        ]);
    }
}
