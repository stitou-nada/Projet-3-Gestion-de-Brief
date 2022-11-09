@include('layouts.head')

<form  action="{{route('brief.update',$brief->id)}}" method="POST"  >
    @csrf
    @method("PUT")
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du brief :<input type="text" class="form-control"  value="{{$brief->Nom_du_brief}}" name="nom" >
      </div>
      <div class="form-group col-md-2">
        Date/heure de livraison :<input type="datetime-local" class="form-control" value="{{$brief->Date_heure_de_livraison}}" name="livraison" >
      </div>
      <div class="form-group col-md-2">
        Date/heure de récupération :<input type="datetime-local" class="form-control" value="{{$brief->Date_heure_de_récupération}}" name="recuperation" >
      </div>
    </div>

    <button type="submit" class="btn btn-warning">Editer</button>
  </form>



  <a  href="" style="margin-bottom: 12px" class="btn btn-primary" >Add brief</a>

<table class="table">
    <thead class="thead-dark" style="background-color:black ;color:azure">
      <tr>

            <th scope="col">id</th>
            <th scope="col">Nom de tache</th>
            <th scope="col">Debut de la tache</th>
            <th scope="col">Fin de la tache</th>
            <th scope="col">Action</th>
            <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tache as $value)
      <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->Nom_de_la_tache}}</td>
        <td>{{$value->Debut_de_la_tache}}</td>
        <td>{{$value->Fin_de_la_tache}}</td>
          <td>
              <form action="" method="POST">
              
                <a href="" class="btn btn-warning">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>

              </form>
           </td>
      </tr>
      @endforeach

    </tbody>

  </table>

