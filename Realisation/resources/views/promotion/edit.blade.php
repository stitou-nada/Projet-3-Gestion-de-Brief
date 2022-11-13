 @extends('master')
  @section('content')

  <div class="main-panel">
  <div class="content">
    <h1 class="titre" > Modifier Promotion </h1>
    {{-- <div class="row">
      <div class="col-md-8"> --}}
        <div class="card">

          <div class="card-body">
            <form  action="{{route('promotion.update',$promotion->id)}}" method="POST"  >
              @csrf
              @method("PUT")
                 <div class="row">
                <div class="col-md-5 pr-md-1">
                  <div class="form-group">
                    <h1>Nom Promotion </h1>
                    <h4 style="color: rgb(238, 0, 255)" class="text title"  onclick="change()"> {{$promotion->nom}}</h4>
                    <input type="hidden"  class="form-control input" placeholder="nom " value="{{$promotion->nom}}" name="nom" >
                  </div>
                </div>


              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-fill btn-primary">Modifier</button>
            </div>
           </form>
          </div>



          {{-- gestion apprenant --}}
          <div class="card ">
              <div class="card-header">
                  @foreach ($brief as $valueBrief)
                  <h2  >Briefs assignés à la promotion : {{$valueBrief->Nom_du_brief}}</h2>
                  @endforeach
                <form action="{{route('apprenant.create')}}"  method="get" >

                <button  type="submit" class="btn btn-primary">Add Apprenant</button>
                <input type="hidden" value="{{$promotion->id}}" name="promotion_id">
              </form>
              <div class="col">
                {{-- search  --}}
                <div class="search-box">
                  <input type="hidden" value="{{$promotion->id}} " id="searchID" class="form-control">
                    <input type="text" id="search" class="form-control searchEdit searchInput " placeholder="Recherche&hellip;">
                  </div>
              </div>
              {{-- fin search --}}
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>id</th>
                        <th>Nom </th>
                        <th> Prenom</th>
                        <th>Email</th>
                        <th class="text-center" > Action</th>
                      </tr>
                    </thead>
                    <tbody id="tbody">
                      @foreach ($apprenant as $value)
                      <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->Nom}}</td>
                        <td>{{$value->Prenom}}</td>
                        <td> {{$value->Email}}</td>
                        <td class="td-btn" style="">
                          <form action="{{route('apprenant.destroy',$value->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button  style=" all: unset; cursor: pointer; font-size:25px" ><i class="fa fa-trash"></i></button>
                          </form>
                            <a href="{{route('apprenant.edit',$value->id)}}" style="font-size:25px" ><i class="fa fa-edit"></i></a>
                        </td>

                      </tr>

                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>

      <!-- fin table -->

    </div>
    <a href="{{route('promotion.index')}}"class="btn btn-seccess">retourn</a>



  </div>
  </div>

  
  <script>
    let text = document.querySelector('.title');
    let input = document.querySelector('.input');

    function change(){
        text.style.display = "none"
        input.setAttribute("type", "text");

    }



    $id= $("#searchID").val();
    $('#search').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
        type : 'get',
        url : 'searchApp',
        // url : '{{URL::to('searchApp')}}',
        data:{'key':$value
              'id':$id
            },
        success:function(data){
            $('#tbody').html(data);
        }
    });
    })
</script>
  @endsection
