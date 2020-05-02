@extends('layouts.helpdesk')
@section('content')
<div class="row p-2"></div>
<div class =container>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
  <label class="custom-control-label" for="defaultInline1">New Arrivals</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
  <label class="custom-control-label" for="defaultInline2">Assigned Jobs</label>
</div>


<!-- Default inline 3-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline3" name="inlineDefaultRadiosExample">
  <label class="custom-control-label" for="defaultInline3">Started Jobs</label>
</div>

<!-- Default inline 3-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline4" name="inlineDefaultRadiosExample">
  <label class="custom-control-label" for="defaultInline4">Finished Jobs</label>
</div>
</div>


<!-- Search form -->
<form class="form-inline d-flex justify-content-center md-form form-sm ">
<form >
  <input type="text" name="search" placeholder="Search..">
</form>


  
  <div class="leftpane">
  <div class="column left" >
<table class="table  table-sm table-borderless">
  <thead>
    <tr>
      <th scope="col"><h1><span class="badge badge-primary">Assigned</span></h1></th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Pending jobs</th>
      <td>10</td>
    </tr>
    <tr>
      <th scope="row">Jobs To day</th>
      <td>10</td>  
    </tr>
    <tr>
    <th scope="col"><h1><span class="badge badge-success">Started</span></h1></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Pending jobs</th>
      <td>10</td>
    </tr>
    <tr>
      <th scope="row">Jobs To day</th>
      <td>10</td>  
    </tr>
    <th scope="col"><h1><span class="badge badge-warning">Finished</span></h1></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Pending jobs</th>
      <td>10</td>
    </tr>
    <tr>
      <th scope="row">Jobs To day</th>
      <td>10</td>  
    </tr>
</table>
</div>
</div>
  <div class="middlepane">
  
<div class="table-wrapper-scroll-y my-custom-scrollbar">

<table class="table table-bordered table-striped  table-sm mb-0">
  <thead>
    <tr>
  <th style="width: 25%">Request No</th>
  <th style="width: 35%">Job Description</th>
  <th style="width: 20%">Job Changes</th>
  <th style="width:  20%">Job Control</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
  <td>Mark</td>
  <td> 
  <a style="Padding-left:0px;" href='#'><i class="fas fa-align-left"></i></a>
  <a style="padding-left:20px;" href='#'><i class="fas fa-edit" ></i></a>
  <div class="btn-group"><a style="padding-left:20px;"></a>
  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Set
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Low</a>
    <a class="dropdown-item" href="#">High</a>
    <a class="dropdown-item" href="#">Medium</a>
</div>
</td>
<td>
<a style="Padding-left:0px;" href='#'><i class="fas fa-play"></i></a>
<a style="padding-left:20px;" href='#'><i class="fas fa-sync"></i></a>
<a style="padding-left:20px;" href='#'><i class="fas fa-stop-circle"></i>
</a>
</td>
</tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">User Comments</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="15"></textarea>
  </div>
</div>


<div class="rightpane">

<center><h4> <a style="padding-left:0px;" href='#'><i class="fas fa-briefcase"></i>
<b>Job Details</b></h4></center>
<fieldset>
<!-- Text input-->
<div class="form-group">
<label class="col-md-6 control-label">Category</label>  
<div class="col-md-10 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="first_name" placeholder="First Name" class="form-control"  type="text">
</div>
</div>
</div>


<!-- Text input-->

<div class="form-group">
<label class="col-md-6 control-label" >Problem </label> 
<div class="col-md-10 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="last_name" placeholder="Last Name" class="form-control"  type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-6 control-label" >Sub Problem</label> 
<div class="col-md-10 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="last_name" placeholder="Last Name" class="form-control"  type="text">
</div>
</div>
</div>


<center><h4> <a style="padding-left:10px;" href='#'><i class="far fa-address-card"></i>
<b>Contact Details</b></i></h4></center>
<form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>
<!-- Text input-->

<div class="form-group ">
<label class="col-md-6 control-label">User Name</label>  
<div class="col-md-10 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="first_name" placeholder="First Name" class="form-control"  type="text">
</div>
</div>
</div>


<!-- Text input-->

<div class="form-group">
<label class="col-md-6 control-label" >Designation </label> 
<div class="col-md-10 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="last_name" placeholder="Last Name" class="form-control"  type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-6 control-label" >Contact no</label> 
<div class="col-md-10 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="last_name" placeholder="Last Name" class="form-control"  type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-6 control-label" >Ip Address</label> 
<div class="col-md-10 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="last_name" placeholder="Last Name" class="form-control"  type="text">
</div>
</div>
</div>



</div>
@endsection


