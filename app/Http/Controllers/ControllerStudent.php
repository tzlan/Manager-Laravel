<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class ControllerStudent extends Controller
{
//
//    public function __construct(){
//
//        $this->middleware('auth')->except(['lister_etudiants','formulaire']);
//        //var_dump($this);
//    }
    public function lister_etudiants()
    {
        if (auth()->check()) {
            $students = Student::all();//Fonction qui liste les étudiants
            return view('students/lister_students', [
                'students' => $students,
            ]);
        }else
            return redirect('connexionUser')->withErrors([
                'email'=>"Vous devez obligatoirement etre connecté pour avoir ces informations"
            ]);

    }

    public function formulaire(){
        return view('students/inscription_students');

    }
    public function inscription_students()
    {



            request()->validate([
                'id' => ['required'],
                'name' => ['required'],
                'first_name' => ['required'],
                'class' => ['required'],
                'cv' => ['required'],
                'date_n' => ['required'],
                'motivation' => ['required'],
                'status' => ['required'],

            ]);

            $entreprise = Student::create([
                'id' => request('id'),
                'name' => request('name'),
                'first_name' => request('first_name'),
                'class' => request('class'),
                'cv' => request('cv'),
                'date_n' => request('date_n'),
                'motivation' => request('motivation'),
                'status' => request('status'),

            ]);
            

            return view('prise_en_compte_inscription');


    }


    public function destroy($id)
    {

            $student = Student::find($id);
            $student->delete();
            return view('modification_prise_en_compte');

    }


    public function edit($id){

        $student= Student::find($id);
        $students = Student::all();

        return view('students/modifier_students', compact('student'));
    }

    public function update(Request $request, $id ){
        $this->validate($request,['id'=>'required|min:1', ]);

        $student=Student::find($id);

        $student->name=$request->name;
        $student->first_name=$request->first_name;
        $student->class=$request->class;
        $student->cv=$request->cv;
        $student->motivation=$request->motivation;
        $student->status=$request->status;


        $student->save();

        return view('modification_prise_en_compte');
    }




}
