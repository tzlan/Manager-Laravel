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

        $student = Student::create([
            'name' => request('name'),
            'first_name' => request('first_name'),
            'class' => request('class'),
            'cv' => request('cv'),
            'date_n' => request('date_n'),
            'motivation' => request('motivation'),
            'status' => request('status'),

        ]);

        // Création de l'utilisateur relié à ĺ'étudiant.
        $user = User::make([                // make() ne crée pas l'utilisateur en base de données, cela est nécessaire
            'email' => request('email'),    // dans ce cas, parce que le rôle (non-nullable) n'a pas été attribué.
            'name' => request('name'),
            'password' => bcrypt(request('password')),
            // Ajouter les champs manquants.
        ]);

        // Cette méthode se charge de lier automatiquement les entités via la fonction User::role()
        // Pour récupérer le rôle de l'utilisateur, il suffit de faire $user->role (sans les parenthèses).
        $user->role()->associate($student);
        $user->save();  // Maintenant l'utilisateur est inséré en base de données.

        return view('prise_en_compte_inscription');

    }




}
