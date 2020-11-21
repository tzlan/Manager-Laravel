<?php

namespace App\Http\Controllers;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;


class ControllerEntreprise extends Controller
{

    public function lister_entreprises(){
        $entreprises = Entreprise::all();//Fonction qui liste
        return view('/lister_entreprises',[
            'entreprises'=> $entreprises,
        ]);
    }
    public function formulaire(){
        return view('inscription_entreprise');
    }
    public function inscription_entreprise(){


            request()->validate([
                'id' => ['required'],
                'name' => ['required'],
                'no_rue' => ['required'],
                'ville' => ['required'],
                'code_postal' => ['required'],

            ]);

            $entreprise = Entreprise::create([
                'id' => request('id'),
                'name' => request('name'),
                'no_rue' => request('no_rue'),
                'ville' => request('ville'),
                'code_postal' => request('code_postal'),

            ]);

            return view('prise_en_compte_inscription');

    }






    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
