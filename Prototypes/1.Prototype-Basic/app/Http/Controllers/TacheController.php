<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use App\Models\tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{

    public function index()
    {
        $tache = tache::all();
        return view('tache.index',compact('tache'));
    }


    public function create()
    {
        return view('tache.create');
    }


    public function store(Request $request)
    {
        tache::create([
            "Nom_de_la_tache"=> $request->nom,
            "Debut_de_la_tache"=> $request->debut_tache,
            "Fin_de_la_tache"=> $request->fin_tache,
        ])->save();

        return redirect('tache');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $tache = tache::where('id',$id)
        ->get();
        return view('tache.edit',compact('tache'));    }


    public function update(Request $request, $id)
    {
        tache::find($id)
        ->update([
            "Nom_de_la_tache"=> $request->nom,
            "Debut_de_la_tache"=> $request->debut_tache,
            "Fin_de_la_tache"=> $request->fin_tache,
        ]);
        return redirect('tache');
    }


    public function destroy($id)
    {
        tache::find($id)
        ->delete();
        return redirect('tache');
    }
}
