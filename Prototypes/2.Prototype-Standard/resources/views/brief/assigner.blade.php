<h1 style="color: brown">Deja assigner</h1>

 @foreach ($apprenantAssinger as $valuee)
    

 <h4>{{$valuee->Nom}} {{$valuee->Prenom}}</h4 > 
    <form action="{{route('assigner.destroy',$valuee->id)}}" method="POST">
        @csrf
        @method('DELETE')
       <input type="hidden" value="{{$valuee->id}}" name="apprenant_id">
       <input type="hidden" value="{{$id}}" name="brief_id">
        
        <button>-</button>
</form>

 @endforeach

 <h1 style="color: brown"> Assigner les apprenant</h1>
@foreach ($apprenant as $value)
    

 <h4>{{$value->Nom}} {{$value->Prenom}}</h4>
    <form action="{{route('assigner.store')}}" method="POST">
        @csrf
       <input type="hidden" value="{{$value->id}}" name="apprenant_id">
       <input type="hidden" value="{{$id}}" name="brief_id">
        
        <button>+</button>
</form>
 @endforeach


