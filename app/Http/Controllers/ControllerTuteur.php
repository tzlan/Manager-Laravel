<?php

namespace App\Http\Controllers;


use App\Models\Tuteur;
use Illuminate\Http\Request;

class ControllerTuteur extends Controller
{
    public function lister_tuteurs(){
        $tuteurs = Tuteur::all();//Fonction qui liste les étudiants
        return view('tuteurs/lister_tuteurs',[
            'tuteurs'=> $tuteurs,
        ]);
    }
        public function formulaire(){
        return view('jury/inscription_jury');
    }
    public function inscription_jury(){


        request()->validate([
            'id' => ['required'],
            'name' => ['required'],
            'first_name' => ['required'],
            'date_n' => ['required'],
            'status' => ['required'],

        ]);

        $jury = Jury::create([
            'id' => request('id'),
            'name' => request('name'),
            'first_name' => request('first_name'),
            'date_n' => request('date_n'),
            'status' => request('status'),

        ]);

        return view('prise_en_compte_inscription');

    }



//    public function update(Request $request, $id)
//    {
//        $this->validate($request,['id'=>'required|min:1', ]);
//
//        $entreprise=Entreprise::find($id);
//        $entreprise->name=$request->name;
//        $entreprise->no_rue=$request->no_rue;
//        $entreprise->ville=$request->ville;
//        $entreprise->code_postal=$request->code_postal;
//        $entreprise->save();
//
//        return view('modification_prise_en_compte');
//    }
}
