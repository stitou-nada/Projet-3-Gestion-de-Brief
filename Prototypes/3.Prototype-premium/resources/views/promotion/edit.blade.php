@include('layouts.head')

<form  action="{{route('promotion.update',$promotion->id)}}" method="POST"  >
    @csrf
    @method("PUT")
    <div class="form-row">
      <div class="form-group col-md-2">
        Nom du brief :<input type="text" class="form-control"  value="{{$promotion->nom}}" name="nom" >
      </div>
    </div>

    <button type="submit" class="btn btn-warning" style="margin-top :20px">Editer</button>
  </form>

  <a href="{{route('promotion.index')}}">retourn</a>
  