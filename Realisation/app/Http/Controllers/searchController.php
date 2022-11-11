<?php

namespace App\Http\Controllers;
use App\Models\promotion;
use App\Models\brief;
use App\Models\apprenant;
use Illuminate\Http\Request;

class searchController extends Controller
{

    public function search(Request $request){

        if($request->ajax()){
            $input = $request->key;
        $output="";
        $Promotion= promotion::where('nom','like',$input."%")

        ->get();
        if($Promotion)
        {
            foreach ($Promotion as $value) {
            $urlEdit = (url('edit/'.$value->id));
            $urlDelete = (url('suprimer/'.$value->id));
        $output.='<tr>

        <td>'.$value->id.'</td>
        <td>'.$value->nom.'</td>

        <td class="text-center">
                        <form action="'.route('promotion.destroy',$value->id).'" method="POST">
                        <input type="hidden" name="_token" value="fjuTilA30n1ZZyHiADMJe6d3hCdEgdcuI4Gu80Xz">
                        <input type="hidden" name="_method" value="DELETE">

                        <button style=" all: unset; cursor: pointer; font-size:25px"><i class="fa fa-trash"></i></button>
                        </form>
                      </td>
        </tr>';

    }
      return Response($output);
      }
    }
}
    public function searchBreif(Request $request){

        if($request->ajax()){
            $input = $request->key;
        $output="";
        $Brief= brief::where('Nom_du_brief','like',$input."%")

        ->get();
        if($Brief)
        {
            foreach ($Brief as $value) {
            $urlEdit = (url('edit/'.$value->id));
            $urlDelete = (url('suprimer/'.$value->id));
        $output.='<tr>

        <td>'.$value->id.'</td>
        <td>'.$value->Nom_du_brief.'</td>
        <td>'.$value->Date_heure_de_livraison.'</td>
        <td>'.$value->Date_heure_de_récupération.'</td>



        <td class="td-btn-briefs" >
                      <form action="'.route('brief.destroy',$value->id).'" method="POST">
                      <input type="hidden" name="_token" value="fjuTilA30n1ZZyHiADMJe6d3hCdEgdcuI4Gu80Xz">
                      <input type="hidden" name="_method" value="DELETE">
                      <a href="'.route('brief.edit',$value->id).'" style="font-size:25px"><i class="fa fa-edit"></i></a>

                    </form>
                    <button style=" all: unset; cursor: pointer; font-size:25px"><i class="fa fa-trash"></i></button>



                          <form action="'.route('tache.create').'"  method="get" >
                            <a  href="'.route('assigner.show',$value->id).'" class="btn btn-info">Assigner</a>

                            <button  class="btn btn-warning">+ Tache</button>
                            <input type="hidden" value="'.$value->id.'" name="brief_id">
                          </form>

        </td>
        </tr> ';
    }
      return Response($output);
      }
    }
}
    public function searchApp(Request $request){
        if($request->ajax()){
            // dd($request->ajax());
            $input = $request->key;
        $output="";
        $Apprenant= apprenant::where('Nom','like',$input."%")

        ->get();
        if($Apprenant)
        {
            foreach ($Apprenant as $value) {
            $urlEdit = (url('edit/'.$value->id));
            $urlDelete = (url('suprimer/'.$value->id));
        $output.='<tr>

        <td>'.$value->id.'</td>
        <td>'.$value->Nom.'</td>
        <td>'.$value->Prenom.'</td>
        <td>'.$value->Email.'</td>



        <td class="td-btn" style="">
                          <form action="'.route('apprenant.destroy',$value->id).'" method="POST">
                          <input type="hidden" name="_token" value="fjuTilA30n1ZZyHiADMJe6d3hCdEgdcuI4Gu80Xz">
                          <input type="hidden" name="_method" value="DELETE">
                            <button  style=" all: unset; cursor: pointer; font-size:25px" ><i class="fa fa-trash"></i></button>
                          </form>
                            <a href="'.route('apprenant.edit',$value->id).'" style="font-size:25px" ><i class="fa fa-edit"></i></a>
        </td>
        </tr> ';
    }
      return Response($output);
      }
    }

}
}
