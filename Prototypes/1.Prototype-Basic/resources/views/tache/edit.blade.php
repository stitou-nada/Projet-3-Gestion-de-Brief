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

