<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Stage;
use Illuminate\Http\Request;

class ControllerStage extends Controller
{
    public function listerStages()
    {
//
//        $stages =null;
//        if (auth()->check()) {
//            if (auth()->user()->tuteurs_id) {
//
//                $stages = Stage::where('tuteurs_id',auth()->user()->tuteurs_id)->get();
//
//            }
//
//       //dd($stages);
//            return view('stages/lister_stage', [
//                'stages' => $stages,
//            ]);
//        } else {
//            return redirect('connexionUser')->withErrors([
//                'email' => "Vous devez obligatoirement etre connecté pour avoir ces informations"
//            ]);
//        }

        if (auth()->check()) {
            $stages = Stage::all();

            return view('stages/lister_stage', [
                'stages'=> $stages,
            ]);
        } else {
            return redirect('connexionUser')->withErrors([
                'email' => "Vous devez obligatoirement etre connecté pour avoir ces informations"
            ]);
        }
    }
    public function edit($id)
    {
        $user = Auth::user();

        if ($user->jury_id) {

            $stage = Stage::find($id);

            $stage->update(['validation_stage_jury' => true]);

            return redirect('/lister_stage');
        }


        if ($user->tuteur_id) {

            $stage = Stage::find($id);

            $stage->update(['validation_convention_tuteur' => true]);

            return redirect('/lister_stage');
        }




    }
    public function editRemarque($id){

        $stage= Stage::find($id);

        return view('stages/modifier_remarque', compact('stage'));
    }

    public function updateRemarque(Request $request, $id ){


        $stage=Stage::find($id);
        $stage->remarque_tuteur=$request->get('remarque_tuteur');

        $stage->save();

        return view('remarque_prise_en_compte');
    }




}
