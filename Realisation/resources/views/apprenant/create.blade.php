@extends('masterIN')
@section('content')
    
  <div class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h2 class="title">Add Apprenant </h2>
          </div>
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
                <button type="submit" class="btn btn-fill btn-primary">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
  </div>

  @endsection
  
