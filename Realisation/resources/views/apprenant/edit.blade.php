@extends('master')
@section('content')
    
<div class="main-panel">
  <div class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title">Edit Apprenant</h5>
          </div>
          <div class="card-body">
            <form  action="{{route('apprenant.update',$apprenant->id)}}" method="POST">
              @csrf
              @method("PUT")
            
              <div class="row">
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>Nom </label>
                    <input type="text" class="form-control" placeholder="nom " value="{{$apprenant->Nom}}" name="nom" >
                  </div>
                </div>
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>Prenom </label>
                    <input type="text" class="form-control"value="{{$apprenant->Prenom}}" name="prenom" >
                  </div>
                </div>
                
                
              </div>
              <div class="row">
                <div class="col-md-6 pr-md-1">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" value="{{$apprenant->Email}}" name="email">
                    <input type="hidden" value="{{$apprenant->promotion_id}}" name="promotion_id">
                    
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">Editer</button>
              </div>
            </form>
          </div>

      </div>
      
  </div>
  
</div>
</div>
@endsection 











