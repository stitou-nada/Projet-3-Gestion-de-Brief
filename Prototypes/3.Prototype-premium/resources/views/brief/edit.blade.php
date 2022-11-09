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
