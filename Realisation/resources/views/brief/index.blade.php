 @extends('master')
  @section('content')
  <div class="main-panel">
  <div class="content">
    <h1 class="titre" > Gestion Brief </h1>
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <a  href="{{route('brief.create')}}"  class="btn btn-primary">Ajouter Brief</a>
          </div>
          <div class="card-body">
              {{-- search  --}}
              <div class="search-box-promotion">
                 <input type="hidden" value="" id="IdKey"   class="form-control  searchInput" >
                 <input type="text" id="search" class="form-control searchEdit searchInput " placeholder="Recherche&hellip;">
               </div>
           </div>
           {{-- fin search --}}
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
                <tbody id="tbody">
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
                    <td class="td-btn-briefs" >
                      <form action="{{route('brief.destroy',$value->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                      <a href="{{route('brief.edit',$value->id)}}" style="font-size:25px"><i class="fa fa-edit"></i></a>

                    </form>
                    <button style=" all: unset; cursor: pointer; font-size:25px"><i class="fa fa-trash"></i></button>



                          <form action="{{route('tache.create')}}"  method="get" >
                            <a  href="{{route('assigner.show',$value->id)}}" class="btn btn-info">Assigner</a>

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
  <script src="{{asset('assets/js/searchBrief.js')}}"></script>

  @endsection
