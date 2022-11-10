<?php

namespace App\Http\Controllers;

use App\Models\apprenant;
use App\Models\promotion;
use App\Models\brief;
use App\Models\apprenant_brief;
use Illuminate\Http\Request;

class AssignerController extends Controller
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
    $all = promotion::latest()->first()->hasManyApprenant;

    foreach ($all as $value) {
        if(is_null(brief::find($request->brief_id)
          ->apprenant()
          ->find($request->apprenant_id))){
            apprenant_brief::create([
            "apprenant_id"=>$request->apprenant_id,
            "brief_id"=>$request->brief_id,
            "promotionID"=>$request->promotion_id,
        ]);

           }
            return back();
        }
    }
    public function addAll()
    {
        $students = promotion::latest()->first()->hasManyApprenant;

        foreach ($students as $student) {
            if (is_null(brief::find(request()->id)->apprenant()->find($student->id))) {
                apprenant_brief::create([
                    'apprenant_id' => $student->id,
                    'brief_id' => request()->id,
                    'promotionID' => $student->promotion_id,
                ]);
            }
        };
        return back();
    }





    public function show( $id)
    {


        $students = promotion::latest()->first()->hasManyApprenant;
        $brief = brief::where('id', $id)->firstOrFail();
        $assigned = array_map(function ($student) {
            return $student['id'];
        }, $brief->apprenant->toArray());


        $apprenant_id= apprenant::select("id")->get();
        $apprenant = apprenant::all();
        $apprenantAssigner = brief::find($id)->apprenant;
        return view('brief.assigner',compact('apprenant','apprenantAssigner',"apprenant_id",'id' ,'brief','students',"assigned"));
    }

    public function edit(AssignerController $assignerController)
    {
        //
    }

    public function update(Request $request, AssignerController $assignerController)
    {
        //
    }


    public function destroy(Request $request ,$id)
    {

       apprenant_brief::where([

        ['apprenant_id',$request->apprenant_id],
        ['brief_id',$request->brief_id]
      ])->delete();



        return back();
    }



}
