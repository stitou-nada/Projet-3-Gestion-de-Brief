<h1 style="color: brown">Deja assigner</h1>

 @foreach ($apprenantAssinger as $valuee)
    

 <h4>{{$valuee->Nom}} {{$valuee->Prenom}}</h4 > <button>-</button>

 @endforeach

 <h1 style="color: brown"> Assigner les apprenant</h1>
@foreach ($apprenant as $value)
    

 <h4>{{$value->Nom}} {{$value->Prenom}}</h4 >
    <form action="{{route('assigner.store')}}">
        <button>+</button>
</form>
 @endforeach


