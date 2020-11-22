<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;


class ControllerStudent extends Controller
{
    public function lister_etudiants(){
        $students = Student::all();//Fonction qui liste les étudiants
        return view('/lister_students',[
            'students'=> $students,
        ]);
    }
    public function formulaire(){
        return view('inscription_students');
    }
    public function inscription_students(){


        request()->validate([
            'name' => ['required'],
            'first_name' => ['required'],
            'class' => ['required'],
            'cv' => ['required'],
            'date_n' => ['required'],
            'motivation' => ['required'],
            'status' => ['required'],

        ]);

        $entreprise = Student::create([
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




}
