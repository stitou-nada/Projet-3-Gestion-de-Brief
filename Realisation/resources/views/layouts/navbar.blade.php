<div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->
    <div class="sidebar-wrapper">
      <div class="logo">
       
          <img  src="{{asset('assets/img/logo.png')}}" alt="">

      </div>
      <ul class="nav">
        <li class="active ">
          <a href="{{route('promotion.index')}}">
            <i class="tim-icons icon-chart-pie-36"></i>
            <p>Gestion Promotion</p>
          </a>
        </li>
        <li class="active ">
          <a href="{{route('brief.index')}}">
            <i class="tim-icons icon-chart-pie-36"></i>
            <p>Gestion Brief</p>
          </a>
        </li>
      </ul>
    </div>
  </div>