
@extends('master')

@section('content')
   
  <div class="main-panel">
     
    <div class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h5 class="title">Add Tache</h5>
            </div>
            <div class="card-body">
              <form  action="{{route('tache.store')}}" method="POST" >
                @csrf
                <div class="row">
                  <div class="col-md-5 pr-md-1">
                    <div class="form-group">
                      <label>Nom tache</label>
                      <input type="text" class="form-control" placeholder="nom " name="nom">
                    </div>
                  </div>
                  
                  
                </div>
                <div class="row">
                  <div class="col-md-6 pr-md-1">
                    <div class="form-group">
                      <label>Début Tache</label>
                      <input type="datetime-local" class="form-control" name="debut_tache">
                    </div>
                  </div>
                  <div class="col-md-6 pl-md-1">
                    <div class="form-group">
                      <label>Fin Tache</label>
                      <input type="datetime-local" class="form-control" name="fin_tache">
                    </div>
                  </div>
                  <input type="hidden" value="{{$id}}" name="brief_id">
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-fill btn-primary">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
    </div>
    
  </div>

  @endsection
