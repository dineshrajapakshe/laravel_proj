<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Help Desk</title>
  <!-- Styles -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "stylesheet" href = "{{asset('css/all.css')}}"crossorigin="anonymous"/>
  <link rel = "stylesheet" href = "{{asset('css/app.css')}}"/>
  <link rel = "stylesheet" href = "{{asset('css/3colmn.css')}}"/>
  <link rel = "stylesheet" href = "{{asset('css/newt.css')}}"/>
  <link rel = "stylesheet" href = "{{asset('css/search.css')}}"/>
  <link rel = "stylesheet" href = "{{asset('css/sidebar.css')}}"/>
  <script src="{{ asset('js/app.js')}}" defer></script>
  <script src="main.js"></script> 
  <script src="{{ asset('js/table.js')}}"></script>
  <script src="{{ asset('js/doughnutChart.js')}}"></script>
  <script src="{{ asset('js/all.js')}}" defer></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary navbar-static-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">IT Help Desk</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    </ul>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" class="pr3">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <li class="nav-brand">
      <a class="navbar-brand" href="#">User </a>
    <ul class="navbar-nav mr-auto mt-1 mt-lg-0">
    </ul>
      </li>
      
      <li class="nav-item active">
      <li class="nav-">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Job Ctegories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Add Catogery</a>
          <a class="dropdown-item" href="#">Edit Category</a>
          <a class="dropdown-item" href="#">Delete Category</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reports 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Daily </a>
          <a class="dropdown-item" href="#">Monthly</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Finished jobs</a>
          <a class="dropdown-item" href="#">stated jobs </a>
          <a class="dropdown-item" href="#">Pending Jobs</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a class="navbar-brand" href="#">Log Out</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
      </li> 
    </ul>
    </form>
    </nav>

<div class="leftpane">
<div class="column left" >
<canvas id="Admin" width="400" height="400"></canvas>
 
<div class="middlepane">

<div class="rightpane">




</div>

</body>
</html>


