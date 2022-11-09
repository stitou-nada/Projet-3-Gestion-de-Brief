<?php

namespace App\Http\Controllers;

use App\Models\brief;
use Illuminate\Http\Request;

class BriefController extends Controller
{

    public function index()
    {
        $brief= brief::all();
        return view('brief.index',compact('brief'));
    }


    public function create()
    {
        return view('brief.create');
    }


    public function store(Request $request)
    {

        brief::create([
            "Nom_du_brief" =>$request->nom,
            "Date_heure_de_livraison"=>$request->livraison,
            "Date_heure_de_récupération"=>$request->recuperation,
        ])->save();

        return redirect('brief');
    }


    public function show(brief $brief)
    {
        //
    }


    public function edit($id)
    {
         $brief = brief::find($id);
         return view('brief.edit',compact('brief'));
    }

    public function update(Request $request, $id)
    {
        brief::find($id)
         ->update([
            "Nom_du_brief" =>$request->nom,
            "Date_heure_de_livraison"=>$request->livraison,
            "Date_heure_de_récupération"=>$request->recuperation,
        ]);
        return redirect('brief');
    }

    public function destroy( $id)
    {
        brief::find($id)
        ->delete();
        return back();
    }
}
