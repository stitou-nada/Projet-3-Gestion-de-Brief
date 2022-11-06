<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use Illuminate\Http\Request;

class BriefController extends Controller
{
   
    public function index()
    {
        $brief = Brief::all();
        return view('index',compact('brief'));
    }

  
    public function create()
    {
        return view('create');
    }

   
    public function store(Request $request)
    {
        dd($request);
        $brief = Brief::create( [
              'Nom_du_brief'= $request->
              'Date_heure_de_livraison'
              'Date_heure_de_récupération'
        ]);
    }

   
    public function show($id)
    {
        //
    }

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

    
    public function destroy($id)
    {
        //
    }
}
