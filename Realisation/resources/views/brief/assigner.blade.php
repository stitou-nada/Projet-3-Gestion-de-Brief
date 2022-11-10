@include('layouts.head')


      <h2>
    </h2>
    Assigner apprenant <a href="{{route('assigner.addAll',['id' => $id])}}"class="btn btn-primary">All</a>
    @foreach ($students as $value)
@if (!in_array($value->id, $assigned))
    <p>{{$value->Nom}} <p>
        <form action="{{route("assigner.store")}}" method="POST"style="padding-right: 1091px;">
            @csrf
        <input type="hidden" value="{{$value->id}}" name="apprenant_id">
        <input type="hidden"  value="{{$id}}" name="brief_id">
        <input type="hidden"  value="{{$value->promotion_id}}" name="promotion_id">

        <button class="btn btn-primary btn-lg">+</button>

    </form>
@else
<p style="color: red">{{$value->Nom}} <p>
    <form action="{{route('assigner.destroy',$value->id)}}" method="POST" style="padding-right: 1091px;">
        @csrf
        @method('DELETE')
      <input type="hidden" value="{{$value->id}}" name="apprenant_id">
      <input type="hidden" value="{{$id}}" name="brief_id">

        <button class="btn btn-danger btn-lg">-</button>
    </form>
@endif

@endforeach

<a href="{{route('brief.index')}}">Retourn</a>
