<?php

namespace App\Http\Controllers;
use App\Models\Jury;
use Illuminate\Http\Request;

class ControllerJury extends Controller
{


    public function lister_jury(){
        //Fonction qui liste
        $jurys = Jury::all();
        return view('jury/lister_jury',[
            'jurys'=> $jurys,
        ]);
    }
    public function formulaire(){
        return view('jury/inscription_jury');
    }
    public function inscription_jury(){
            request()->validate([
            'id' => ['required'],
            'name' => ['required'],
            'first_name' => ['required'],
           'date_n' => ['required'],
            'status' => ['required'],

        ]);

        $jurys = Jury::create([
            'id' => request('id'),
            'name' => request('name'),
            'first_name' => request('first_name'),
            'date_n' => request('date_n'),
            'status' => request('status'),

        ]);

        return view('prise_en_compte_inscription');

    }



    public function update(Request $request, $id)
    {
        $this->validate($request,['id'=>'required|min:1', ]);

        $jurys=Jury::find($id);
        $jurys->name=$request->name;
        $jurys->first_name=$request->first_name;
        $jurys->date_n=$request->date_n;
        $jurys->status=$request->status;
        $jurys->save();

        return view('modification_prise_en_compte');
    }
}
