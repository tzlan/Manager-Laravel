<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use Illuminate\Http\Request;

class ControllerCandidature extends Controller
{
    public function inscription_candidature()
    {


        request()->validate([
            'id' => ['required'],
            'name' => ['required'],
            'description' => ['required'],
            'start' => ['required'],
            'end' => ['required'],


        ]);

        $candidature = Candidature::create([
            'id' => request('id'),
            'name' => request('name'),
            'description' => request('description'),
            'start' => request('start'),
            'end' => request('end'),


        ]);

        return view('prise_en_compte_offre_creation');

    }
}
