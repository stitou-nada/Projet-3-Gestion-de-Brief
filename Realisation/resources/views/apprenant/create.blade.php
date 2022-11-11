@extends('master')
@section('content')

<div class="main-panel">
  <div class="content">
    <h1 class="titre" > Ajouter Apprenant</h1>
    <div class="row">
      <div class="col-md-8">
        <div class="card">

          <div class="card-body">
            <form  action="{{route('apprenant.store')}}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>Nom </label>
                    <input type="text" class="form-control" placeholder="nom " name="nom">
                  </div>
                </div>
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>Prenom </label>
                    <input type="text" class="form-control" placeholder="prenom" name="prenom" >
                  </div>
                </div>


              </div>
              <div class="row">
                <div class="col-md-6 pr-md-1">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="email" name="email" >

                  </div>
                </div>
                <input type="hidden" value="{{$id}}" name="promotion_id">
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">Ajouter</button>
              </div>
            </form>
          </div>
        </div>
      </div>

  </div>
  </div>

  @endsection

