<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.head')
</head>

<body class="">
  <div class="wrapper">
    
     @include('layouts.navbar')
    
    <div class="main-panel">
     
      @yield('content')
      
    </div>
  </div>
 
  
  
</body>

</html>