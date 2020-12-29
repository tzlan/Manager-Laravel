<?php

namespace App\Http\Controllers;
use App\Models\Entreprise;
use App\Models\Offre;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Candidature;
use Illuminate\Support\Facades\Auth;

class ControllerCandidature extends Controller
{
//    public function inscription_candidature(){
//
//
//
//
//        request()->validate([
//            'id' => ['required'],
//
//            'entreprise_id' =>  ['required'],
//            'offre_id' =>  ['required'],
//            'students_id' =>  ['required'],
//        ]);
//
//        $candidature = Candidature::create([
//
//            'id' => request('id'),
//
//            'entreprise_id' => request('entreprise_id'),
//            'offre_id' => request('offre_id'),
//            'students_id' => request('students_id'),
//        ]);
//
//        return view('prise_en_compte_postuler');
//    }


    public function lister_candidatures(){
        $user = Auth::user();

        $candidatures= Candidature::where('entreprise_id', $user->entreprise_id) ->get();

        return view('candidatures/lister_candidatures',[
            'candidatures'=> $candidatures,
        ]);
    }
 //   public function postuler(Offre  $offre){
//
//        $user = Auth::user();
//
//        'offre_id' => $offre->id,
//        'student_id' => Auth::user()->id,
//        'entreprise_id' => $offre->entreprise_id,
//
//        $candiatures  = Candidature::create([
//            'id' => request('id'),
//            'student_id' => request('student_id'),
//            'offre_id' => request('offre_id'),
//            'entreprise_id' => request('entreprise_id'),
//
//        ]);
//
//    }

    public function postuler($student_id,$offre_id,$entreprise_id){

        $user = Auth::user();

        $offre = Offre::find($offre_id);
        $student = Student::find($user->$student_id);
        $entreprise =  Entreprise::find($entreprise_id);

        $candiatures  = Candidature::create([
            'id' => request('id'),
            'student_id' => request('student_id'),
            'offre_id' => request('offre_id'),
            'entreprise_id' => request('entreprise_id'),

        ]);

    }
}
