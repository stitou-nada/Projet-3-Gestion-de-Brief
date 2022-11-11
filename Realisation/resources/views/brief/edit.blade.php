
@extends('master')
@section('content')


  <div class="main-panel">

    <div class="content">
      {{-- <div class="row">
        <div class="col-md-8"> --}}
          <div class="card">
            <div class="card-header">
              <h2 class="title">Edit Brief</h2>
            </div>
            <div class="card-body">
              <form  action="{{route('brief.update',$brief->id)}}" method="POST"  >
                @csrf
                @method("PUT")
                <div class="row">
                  <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>Nom Brief</label>
                      <input type="text" class="form-control" placeholder="nom " value="{{$brief->Nom_du_brief}}" name="nom"  >
                    </div>
                  </div>


                </div>
                <div class="row">
                  <div class="col-md-6 pr-md-1">
                    <div class="form-group">
                      <label>Date/Heure de livraison</label>
                      <input type="datetime-local" class="form-control" value="{{$brief->Date_heure_de_livraison}}" name="livraison"  >
                    </div>
                  </div>
                  <div class="col-md-6 pl-md-1">
                    <div class="form-group">
                      <label>Date/Heure de récuperation</label>
                      <input type="datetime-local" class="form-control" value="{{$brief->Date_heure_de_récupération}}" name="recuperation" >
                    </div>
                  </div>
                </div>

              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">Editer</button>
              </div>
            </form>
          </div>

          {{-- Gestion des taches --}}
          <div class="card ">
            <div class="card-header">
            <form action="{{route('tache.create')}}"  method="get" >

              <button  href="" class="btn btn-primary">Add Tache</button>
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
                      <th class="text-center">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tache as $value)
                    <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->Nom_de_la_tache}}</td>
                      <td> {{$value->Debut_de_la_tache}}</td>
                      <td >  {{$value->Fin_de_la_tache}}</td>
                      <td style="width:22%" >

                          <form action="{{route('tache.destroy',$value->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <a href="{{route('tache.edit',$value->id)}}" class="btn btn-seccess">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>

                          </form>

                      </td>

                    </tr>


                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

    </div>

    <a href="{{route('brief.index')}}"class="btn btn-seccess">Retourn</a>
  </div>
  @endsection
