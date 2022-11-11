 @extends('master')
  @section('content')
  <div class="main-panel">
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <a  href="{{route('brief.create')}}"  class="btn btn-primary">Add Brief</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table tablesorter " id="">
                <thead class=" text-primary">
                  <tr>
                    <th>
                      id
                    </th>
                    <th>
                      Nom brief
                    </th>
                    <th>
                      Début de la livraison
                    </th>
                    <th>
                      Début de la livraison
                    </th>
                    <th class="text-center">
                      Action
                    </th>

                  </tr>
                </thead>
                <tbody>
                  @foreach ( $brief as $value)

                  <tr>
                    <td>
                      {{$value->id}}
                    </td>
                    <td>
                      {{$value->Nom_du_brief}}
                    </td>
                    <td>
                      {{$value->Date_heure_de_livraison}}
                    </td>
                    <td >
                      {{$value->Date_heure_de_récupération}}
                    </td>
                    <td >
                      <form action="{{route('brief.destroy',$value->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                      <a href="{{route('brief.edit',$value->id)}}"class="btn btn-seccess">Edit</a>
                       <button type="submit" class="btn btn-danger">Delete</button>
                       <a  href="{{route('assigner.show',$value->id)}}" class="btn btn-info">Assigner</a>
                      </form>
                      </td>
                      <td>


                        <form action="{{route('tache.create')}}"  method="get" >

                            <button  class="btn btn-warning">+ Tache</button>
                            <input type="hidden" value="{{$value->id}}" name="brief_id">
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
  </div>

  @endsection
