
@extends('master')
@section('content')

  <div class="main-panel">

    <div class="content">
        <h1 class="titre" > Ajouter Brief </h1>
      <div class="row">
        <div class="col-md-8">
          <div class="card">

            <div class="card-body">
              <form  action="{{route('brief.store')}}" method="POST" >
                @csrf
                <div class="row">
                  <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>Nom Brief</label>
                      <input type="text" class="form-control" placeholder="nom " name="nom" >
                    </div>
                  </div>


                </div>
                <div class="row">
                  <div class="col-md-6 pr-md-1">
                    <div class="form-group">
                      <label>Date/Heure de livraison</label>
                      <input type="datetime-local" class="form-control" name="livraison" >
                    </div>
                  </div>
                  <div class="col-md-6 pl-md-1">
                    <div class="form-group">
                      <label>Date/Heure de récupération </label>
                      <input type="datetime-local" class="form-control" name="recuperation">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">Ajouter</button>
              </div>
            </form>
          </div>
          <a href="{{route('brief.index')}}" class="btn btn-seccess">retourn</a>
        </div>

      </div>

  </div>
  @endsection
