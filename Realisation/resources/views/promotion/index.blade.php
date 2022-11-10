@extends('master')
@section('content')
    

<div class="main-panel">
    
    <!-- table -->
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card ">
            <div class="card-header">
              <a  href="{{route('promotion.create')}}" class="btn btn-primary">Add Promotion</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table tablesorter " id="">
                  <thead class=" text-primary">
                    <tr>
                      <th>
                        id
                      </th>
                      <th>
                        Nom promotion
                      </th>
                      
                      <th class="text-center">
                        Action
                      </th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($promotion as $value)
                    <tr>
                      <td>
                        {{$value->id}}
                      </td>
                      <td>
                        <a href="{{route('promotion.edit',$value->id)}}">{{$value->nom}}</a>
                      </td>
                     
                      <td class="text-center">
                        <form action="{{route('promotion.destroy',$value->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                         <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    
                    @endforeach

            
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

    </div>
    <!-- fin table -->
  </div>
</div>

@endsection