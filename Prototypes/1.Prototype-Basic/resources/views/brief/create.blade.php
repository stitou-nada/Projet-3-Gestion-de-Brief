<form  action="{{route('brief.store')}}"method="POST" >
    @csrf
    nom du brief : <input type="text" name="nom">
   Date/heure de livraison : <input type="datetime-local" name="livraison">
   Date/heure de récupération : <input type="datetime-local" name="recuperation">
    <button type="submit">Ajouter</button>
</form>
<a href="{{route('brief.index')}}">retourn</a>
