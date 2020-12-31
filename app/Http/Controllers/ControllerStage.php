<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Stage;
use Illuminate\Http\Request;

class ControllerStage extends Controller
{
    public function listerStages()
    {

        $stages =null;
        if (auth()->check()) {
            if (auth()->user()->tuteurs_id) {

                $stages = Stage::where('tuteurs_id',auth()->user()->tuteurs_id)->get();

            }

       dd($stages);
            return view('stages/lister_stage', [
                'stages' => $stages,
            ]);
        } else {
            return redirect('connexionUser')->withErrors([
                'email' => "Vous devez obligatoirement etre connecté pour avoir ces informations"
            ]);
        }
    }
    public function edit($id){

        $stage= Stage::find($id);
        $stages = Stage::all();

        $stage->update(['validation_stage_jury' =>true]);

        return redirect('/lister_stage');
    }

    public function update(Request $request, $id ){

       // dd($request->all());
        $this->validate($request,['id'=>'required|min:1', ]);

        $stage=Stage::find($id);

        $stage->id=$request->id;

        $stage->validation_stage_jury=$request->validation_stage_jury;
        $stage->validation_convention_tuteur=$request->validation_convention_tuteur;
        $stage->remarque_tuteur=$request->remarque_tuteur;

        $stage->offre_id=$request->offre_id;
        $stage->entreprise_id=$request->entreprise_id;
        $stage->jury_id=$request->jury_id;
        $stage->student_id=$request->student_id;
        $stage->tuteurs_id=$request->tuteurs_id;



        $stage->save();

        return view('modification_prise_en_compte');
    }




}
