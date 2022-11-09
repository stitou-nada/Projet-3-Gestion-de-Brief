<?php

namespace App\Http\Controllers;

use App\Models\tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{

    public function index()
    {

    }


    public function create(Request $request)
    {
        $id = $request->brief_id;
        return view('tache.create',compact('id'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show(tache $tache)
    {
        //
    }


    public function edit(tache $tache)
    {
        //
    }

    public function update(Request $request, tache $tache)
    {
        //
    }

    public function destroy(tache $tache)
    {
        //
    }
}
