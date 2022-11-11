
@extends('master')
@section('content')

<div class="main-panel">

    <div class="content">
        <h1 class="titre" > Modifier Brief </h1>
      {{-- <div class="row">
        <div class="col-md-8"> --}}
          <div class="card">

            <div class="card-body">
              <form  action="{{route('brief.update',$brief->id)}}" method="POST"  >
                @csrf
                @method("PUT")
                <div class="row">
                  <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>Nom Brief</label>
                      <h5 style="color: rgb(238, 0, 255)" id="title" onclick="change()"> {{$brief->Nom_du_brief}}</h5>
                      <input type="hidden"  class="form-control input" placeholder="nom " value="{{$brief->Nom_du_brief}}" name="nom"  >
                    </div>
                  </div>


                </div>
                <div class="row">
                  <div class="col-md-6 pr-md-1">
                    <div class="form-group">
                      <label>Date/Heure de livraison</label>
                      <h5  style="color: rgb(238, 0, 255)" id="title2"  onclick="changeDate1()"> {{$brief->Date_heure_de_livraison}}</h5>

                      <input type="hidden" class="form-control inputDate1" value="{{$brief->Date_heure_de_livraison}}" name="livraison"  >
                    </div>
                  </div>
                  <div class="col-md-6 pl-md-1">
                    <div class="form-group">
                      <label>Date/Heure de récuperation</label>
                      <h5  style="color: rgb(238, 0, 255)" id="title3" onclick="changeDate2()"> {{$brief->Date_heure_de_récupération}}</h5>

                      <input type="hidden" class="form-control inputDate2" value="{{$brief->Date_heure_de_récupération}}" name="recuperation" >
                    </div>
                  </div>
                </div>

              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">Modifier</button>
              </div>
            </form>
          </div>

          {{-- Gestion des taches --}}
          <div class="card ">
            <div class="card-header">
            <form action="{{route('tache.create')}}"  method="get" >

              <button  href="" class="btn btn-primary">Ajouter tache</button>
              <input type="hidden" value="{{$brief->id}}" name="brief_id">
            </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table tablesorter " id="">
                  <thead class=" text-primary">
                    <tr>
                      <th>id</th>
                      <th>Nom Tache</th>
                      <th> Début tache</th>
                      <th> Fin tache</th>
                      <th class="">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tache as $value)
                    <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->Nom_de_la_tache}}</td>
                      <td> {{$value->Debut_de_la_tache}}</td>
                      <td >  {{$value->Fin_de_la_tache}}</td>
                      <td style="width:20%"  >

                          <form action="{{route('tache.destroy',$value->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <a href="{{route('tache.edit',$value->id)}}" style="font-size:25px" ><i class="fa fa-edit"></i></a>
                            <button style=" all: unset; cursor: pointer; font-size:25px"><i class="fa fa-trash"></i></button>

                          </form>

                      </td>

                    </tr>


                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <a href="{{route('brief.index')}}"class="btn btn-seccess">Retourn</a>
        </div>

    </div>

</div>
<script>
    // let inputDate = document.querySelector('.inputDate');
    let text = document.querySelector('#title');
    let text1 = document.querySelector('#title2');
    let text2 = document.querySelector('#title3');
    let input = document.querySelector('.input');
    let inputDate1 = document.querySelector('.inputDate1');
    let inputDate2 = document.querySelector('.inputDate2');

    function change(){
        text.style.display = "none"
        input.setAttribute("type", "text");

        // inputDate.setAttribute("type", "datetime-local");

    }
    function changeDate1(){
        text1.style.display = "none"
        // input.setAttribute("type", "text");

        inputDate1.setAttribute("type", "datetime-local");

    }
    function changeDate2(){
        text2.style.display = "none"
        // input.setAttribute("type", "text");

        inputDate2.setAttribute("type", "datetime-local");

    }
 </script>
  @endsection
