<?php

namespace App\Http\Controllers;

use App\Models\apprenant;
use App\Models\Brief;
use Illuminate\Http\Request;

class assignerController extends Controller
{
    
    public function index()
    {
        $apprenant = apprenant::all();
        return view('brief.assigner',compact('apprenant'));
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $apprenant =apprenant::all();
        $apprenantAssinger = Brief::find($id)->apprenant;
        return view('brief.assigner',compact('apprenant','apprenantAssinger'));
    }

   
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
