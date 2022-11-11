 @extends('master')
  @section('content')

  <div class="main-panel">
  <div class="content">
    <h1 class="titre" > Ajouter Promotion </h1>
    <div class="row">
      <div class="col-md-8">
        <div class="card">

          <div class="card-body">
            <form action="{{route('promotion.store')}}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>Nom promotion</label>
                    <input type="text" class="form-control"  placeholder="nom"name="nom">
                  </div>
                </div>
              </div>
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
  <a href="{{route('promotion.index')}}">retourn</a>
  @endsection
