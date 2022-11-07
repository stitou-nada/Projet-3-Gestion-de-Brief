<form  action="{{route('tache.store')}}"method="POST" >
    @csrf
    nom du tache : <input type="text" name="nom">
   Début de la tache: <input type="datetime-local" name="debut_tache">
   Fin de la tache: <input type="datetime-local" name="fin_tache">
    <button type="submit">Ajouter</button>
</form>
<a href="{{route('tache.index')}}">retourn</a>
