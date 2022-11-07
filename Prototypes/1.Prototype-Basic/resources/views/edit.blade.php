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
        <tr>
            {{-- <td>{{}}</td>
            <td>{{}}</td>
            <td>{{}}</td>
            <td>{{}}</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td> --}}
        </tr>
    </tbody>
</table>
