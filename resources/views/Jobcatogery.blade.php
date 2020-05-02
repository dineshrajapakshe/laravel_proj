<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/table.css') }}" rel="stylesheet">
  <link rel = "stylesheet" href = "{{asset('css/newt.css')}}"/>
  <script src="main.js"></script>

  <style>
{
  width: 100%;
  height: 100%;
  margin: 0;
}

.container {
  width: 100%;
  height: 100%;
}

.leftpane {
    width: 0%;
    height: 100%;
    float: left;
    padding  :20px;
    border-collapse: collapse;
}

.middlepane {
    width:40%;
    height: 100%;
    float: left;
    padding  :20px;
    border-collapse: collapse;
}

.rightpane {
  width: 60%;
  height: 100%;
  position: relative;
  float: right;
  padding:20px;
  border-collapse: collapse;
}


}
</style>
</head>
<body>
<div class="container">
  <div class="page-header">
    <h1>IT HELP DESK</h1>     
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="Admin">Home</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a class="navbar-brand" href="#">Log Out</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
      </li> 
    </ul>
    </form>
</nav>
</div>
<div class="container">
<div class="middlepane">
<div class="row p-0"></div>
<button type="button" class="btn btn-primary">Add</button>
<button type="button" class="btn btn-success">Modify</button>
<button type="button" class="btn btn-warning">Delete</button>

<div class="row p-2"></div>
<form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>
<!-- Text input-->
<div class="form-group" >
<label class="col-md-8 control-label">Category Code</label>  
<div class="col-md-8 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="first_name" placeholder="Category code" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-8 control-label" >Problem Code </label> 
<div class="col-md-8 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="last_name" placeholder="Problem Code" class="form-control"  type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-8 control-label" >Sub Proble Code </label> 
<div class="col-md-8 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="last_name" placeholder="Last Name" class="form-control"  type="text">
</div>
</div>
</div>

</fieldset>
</form>
<div class="conainer">
<button type="button" class="btn btn-info">Save</button>
</div>
</div>
  
<div class="rightpane">
<div class="table-wrapper-scroll-y my-custom-scrollbar">
<table class="table table-bordered table-striped  table-sm mb-0">
  <thead>
    <tr>
  <th style="width: 30"> Category</th>
  <th style="width: 30%">Problem Code</th>
  <th style="width: 30%">Sub Problem Code</th>
</tr>
</thead>

<tbody>
<tr>
<th scope="row">1</th>
<td>Mark</td>
<td> 
</div>
</td>

</tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
     
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
     
     
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Mark</td>
      <td>Otto</td>
     
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Jacob</td>
      <td>Thornton</td>
     
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
    
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Mark</td>
      <td>Otto</td>
      
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Larry</td>
      <td>the Bird</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr><tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    
  </tbody>
</table>
<div>
</div>
</div>
</div>
</body>
</html>