@include('layouts.head')

@foreach ($tache as $value)
<form  action="{{route('tache.update',$value->id)}}" method="POST" >
    @csrf
    @method("PUT")
    nom du brief : <input type="text" value="{{$value->Nom_de_la_tache}}" name="nom">
    Date/heure de livraison : <input type="datetime-local" value="{{$value->Debut_de_la_tache}}" name="debut_tache">
    Date/heure de récupération : <input type="datetime-local"  value="{{$value->Fin_de_la_tache}}" name="fin_tache">
    <input type="hidden" value="{{$value->brief_id}}" name="brief_id">
    <button type="submit">Editer</button>
</form>
@endforeach



<form  action="{{route('tache.update',$value->id)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du tache :<input type="text" class="form-control" value="{{$value->Nom_de_la_tache}}" name="nom" >
      </div>
      <div class="form-group col-md-2">
        Début de la tache:<input type="datetime-local" class="form-control" value="{{$value->Debut_de_la_tache}}" name="livraison" >
      </div>
      <div class="form-group col-md-2">
        Fin de la tache:<input type="datetime-local" class="form-control" value="{{$value->Fin_de_la_tache}}" name="recuperation" >
      </div>
      <input type="hidden" value="{{$value->brief_id}}" name="brief_id">

    </div>

    <button type="submit" class="btn btn-warning">Editer</button>
  </form>
