

<form  action="{{route('brief.update',$brief->id)}}" method="POST" >
    @csrf
    @method("PUT")
    nom du brief : <input type="text" value="{{$brief->Nom_du_brief}}" name="nom">
    Date/heure de livraison : <input type="datetime-local" value="{{$brief->Date_heure_de_livraison}}" name="livraison">
    Date/heure de récupération : <input type="datetime-local"  value="{{$brief->Date_heure_de_récupération}}" name="recuperation">
    <button type="submit">Ajouter</button>
</form> 



<form action="{{route('tache.create')}}" method="get" >

<button type="submit">Ajouter tache</button>
<input type="hidden" value="{{$brief->id}}" name="brief_id">
</form>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Nom de tache</th>
            <th>Debut de la tache</th>
            <th>Fin de la tache</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tache as $value)

        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->Nom_de_la_tache}}</td>
            <td>{{$value->Debut_de_la_tache}}</td>
            <td>{{$value->Fin_de_la_tache}}</td>
            <td>
                <form action="{{route('tache.edit',$value->id)}}">
                    <button>edit</button>
                </form>
                </td>
                <td>
                <form action="{{route('tache.destroy',$value->id)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button>delete</button>
                </form>
               </td>
        </tr>
        @endforeach

    </tbody>
</table>

<a href="{{route('brief.index')}}">retourn</a>

