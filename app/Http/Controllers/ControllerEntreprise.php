<?php

namespace App\Http\Controllers;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;


class ControllerEntreprise extends Controller
{

    public function lister_entreprises(){
        //Fonction qui liste
        $entreprises = Entreprise::all();
        return view('entreprises/lister_entreprises',[
            'entreprises'=> $entreprises,
        ]);
    }
    public function formulaire(){
        return view('entreprises/inscription_entreprise');
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
        $entreprise= Entreprise::find($id);
        $entreprises = Entreprise::all();

        return view('entreprises/modifier_entreprises', compact('entreprise'));
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
        $this->validate($request,['id'=>'required|min:1', ]);

        $entreprise=Entreprise::find($id);
        $entreprise->name=$request->name;
        $entreprise->no_rue=$request->no_rue;
        $entreprise->ville=$request->ville;
        $entreprise->code_postal=$request->code_postal;
        $entreprise->save();

        return view('modification_prise_en_compte');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        $entreprise=Entreprise::find($id);
        $entreprise->delete();
        return view('modification_prise_en_compte');
    }
}
