
@extends('master')
@section('content')

<div class="main-panel">

    <div class="content">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="card card-upgrade">
            <div class="card-header text-center">
              <h2 class="card-title">Assigner les apprenant</h2>
              <a href="{{route('assigner.addAll',['id' => $id])}}"class="btn btn-info">All</a>
            </div>
            <div class="card-body">

              <div class="table-responsive table-upgrade">
                  <table class="table">
                      <thead>
                      @foreach ($students as $value)
                      @if (!in_array($value->id, $assigned))
                      <tr>
                    <th>{{$value->Nom}} {{$value->Prenom}}</th>
                    <form action="{{route("assigner.store")}}" method="POST"style="padding-right: 1091px;">
                        @csrf
                    <input type="hidden" value="{{$value->id}}" name="apprenant_id">
                    <input type="hidden"  value="{{$id}}" name="brief_id">
                    <input type="hidden"  value="{{$value->promotion_id}}" name="promotion_id">
                    <th > <button type="submit" class="btn btn-primary">+</button> </th>
                </form>
                @else
                <th style="color: rgb(255, 0, 0)">{{$value->Nom}} {{$value->Prenom}}</th>
                <form action="{{route('assigner.destroy',$value->id)}}" method="POST" style="padding-right: 1091px;">
                    @csrf
                    @method('DELETE')
                  <input type="hidden" value="{{$value->id}}" name="apprenant_id">
                  <input type="hidden" value="{{$id}}" name="brief_id">

                    <th><button type="submit" class="btn btn-danger">-</button></th>
                </tr>
                </form>
                @endif

                @endforeach
            </thead>

        </table>
    </div>
</div>
</div>
<a href="{{route('brief.index')}}" class="btn btn-secondary">Retourn</a>
        </div>
      </div>
    </div>
  </div>

  @endsection

