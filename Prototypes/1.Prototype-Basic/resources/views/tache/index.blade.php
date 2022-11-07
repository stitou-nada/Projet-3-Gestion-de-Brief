<a href="{{route('tache.create')}}">Ajouter tache</a>

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
