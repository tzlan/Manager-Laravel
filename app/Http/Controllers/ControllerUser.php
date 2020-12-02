<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    public function formulaire(){
        return view('users/inscription_user');
    }
    public function inscription_user(){


        request()->validate([
            'id' => ['required'],
            'name' => ['required'],
            'tel' => ['required'],
            'first_name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'entreprise_id' => ['required_without_all:jury_id,tuteur_id,student_id'],
            'jury_id' => ['required_without_all:entreprise_id,tuteur_id,student_id'],
            'tuteur_id' => ['required_without_all:jury_id,entreprise_id,student_id'],
            'students_id' => ['required_without_all:jury_id,tuteur_id,entreprise_id'],


        ]);

        $user = User::create([
            'id' => request('id'),
            'name' => request('name'),
            'tel' => request('first_name'),
            'first_name' => request('ville'),
            'email' => request('email'),
            'password' => request('password'),
            'entreprise_id' => request('entreprise_id'),
            'jury_id' => request('jury_id'),
            'tuteur_id' => request('tuteur_id'),
            'students_id' => request('students_id'),


        ]);

        return view('prise_en_compte_inscription');

    }


}
