@foreach ($brief as $value)


<form  action="{{route('brief.update',$value->id)}}" method="POST" >
    @csrf
    @method("PUT")
    nom du brief : <input type="text" value="{{$value->Nom_du_brief}}" name="nom">
    Date/heure de livraison : <input type="datetime-local" value="{{$value->Date_heure_de_livraison}}" name="livraison">
    Date/heure de récupération : <input type="datetime-local"  value="{{$value->Date_heure_de_récupération}}" name="recuperation">
    <button type="submit">Ajouter</button>
</form>
@endforeach

<a href="{{route('brief.index')}}">retourn</a>
