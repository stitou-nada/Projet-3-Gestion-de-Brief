<a href="{{route('brief.create')}}">Ajouter brief</a>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Nom de brief</th>
            <th>Date heure de livraison</th>
            <th>Date heure derécupération</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($brief as $value)


        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->Nom_du_brief}}</td>
            <td>{{$value->Date_heure_de_livraison}}</td>
            <td>{{$value->Date_heure_de_récupération}}</td>
            <td>
                <a href="edit">edit</a>
                <a href="delete">delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
