
<form  action="{{route('tache.store')}}"method="POST" >
    @csrf
    nom du tache : <input type="text" name="nom">
   Début de la tache: <input type="datetime-local" name="debut_tache">
   Fin de la tache: <input type="datetime-local" name="fin_tache">
    <input type="hidden" value="{{$id}}" name="brief_id">
    <button type="submit">Ajouter</button>
</form>
