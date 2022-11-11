 @extends('master')
  @section('content')

  <div class="main-panel">
  <div class="content">
    {{-- <div class="row">
      <div class="col-md-8"> --}}
        <div class="card">
          <div class="card-header">
            <h2 class="title">Edit Promotion</h2>
          </div>
          <div class="card-body">
            <form  action="{{route('promotion.update',$promotion->id)}}" method="POST"  >
              @csrf
              @method("PUT")
                 <div class="row">
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <label>Nom Promotion</label>
                    <input type="text" class="form-control" placeholder="nom " value="{{$promotion->nom}}" name="nom" >
                  </div>
                </div>


              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-fill btn-primary">Editer</button>
            </div>
           </form>
          </div>



          {{-- gestion apprenant --}}
          <div class="card ">
              <div class="card-header">
                  @foreach ($brief as $valueBrief)
                  <h2  >Briefs assignés à la promotion : {{$valueBrief->Nom_du_brief}}</h2>
                  @endforeach
                <form action="{{route('apprenant.create')}}"  method="get" >

                <button  type="submit" class="btn btn-primary">Add Apprenant</button>
                <input type="hidden" value="{{$promotion->id}}" name="promotion_id">
              </form>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>id</th>
                        <th>Nom </th>
                        <th> Prenom</th>
                        <th>Email</th>
                        <th class="text-center" > Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($apprenant as $value)
                      <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->Nom}}</td>
                        <td>{{$value->Prenom}}</td>
                        <td> {{$value->Email}}</td>
                        <td class="td-btn" style="">
                          <form action="{{route('apprenant.destroy',$value->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                            <a href="{{route('apprenant.edit',$value->id)}}" class="btn btn-seccess">Edit</a>
                        </td>

                      </tr>

                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>

      <!-- fin table -->

    </div>
    <a href="{{route('promotion.index')}}"class="btn btn-seccess">retourn</a>



  </div>
  </div>
  @endsection
