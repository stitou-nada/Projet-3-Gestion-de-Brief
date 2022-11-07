<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use Illuminate\Http\Request;

class BriefController extends Controller
{

    public function index()
    {
        $brief = Brief::all();
        return view('brief.index',compact('brief'));
    }


    public function create()
    {
        return view('biref.create');
    }


    public function store(Request $request)
    {

        $brief = Brief::create([
          'Nom_du_brief' => $request->nom,
          'Date_heure_de_livraison' => $request->livraison,
          'Date_heure_de_récupération'=> $request->recuperation,
        ]);
        $brief-> save();
        return redirect('brief');
    }


    public function show($id)
    {

    }

    public function edit($id)
    {
        $brief = brief::where('id',$id)
        ->get();
        return view('brief.edit',compact('brief'));
    }


    public function update(Request $request, $id)
    {
        Brief::find($id)
            ->update([
            'Nom_du_brief' => $request->nom,
            'Date_heure_de_livraison' => $request->livraison,
            'Date_heure_de_récupération'=> $request->recuperation,
          ]);
          return redirect('brief/'.$id.'/edit');
    }


    public function destroy($id)
    {
        Brief::find($id)
        ->delete();
        return redirect('brief');
    }
}
