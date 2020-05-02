@extends('layouts.app')

@section('content')
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/3colmn.css') }}" rel="stylesheet">
  <script src="main.js"></script>


<div class="container">
  <div class="page-header">
    <h1>IT HELP DESK</h1>     
<div class="row p-2" calss= 'pl-20'> </div>

{!! Form::open (['action' => 'ticketsController@store', 'method' => 'post']) !!}

<div class= "form-group">
     {{Form::submit('Click Me!' ,['class' =>'btn btn-primary'])}}
     <div class="row p-2"></div>
     {{Form::label ('user_id' ,'User Id' )}}
     {{Form::number ('user_id' ,'',  ['class' => 'form-control'] )}}

     {{Form::label ('proble_id' ,'Problem Id' )}}
     {{Form::number('problem_id' ,'',  ['class' => 'form-control'] )}}
     
     {{Form::label ('subproble_id' ,'Sub Problem Id' )}}
     {{Form::number('subproblem_id' ,'',  ['class' => 'form-control'] )}}

     {{Form::label ('Problem-description' ,'Problem_description' )}}
     {{Form::text ('Problem_description' ,'',  ['class' => 'form-control'] )}}

     {{Form::label ('ip_address' ,'IP Address' )}}
     {{Form::number ('ip_address' ,'',  ['class' => 'form-control'] )}}

     {{Form::label ('serial_no' ,'Serial No' )}}
     {{Form::number ('serial_no' ,'',  ['class' => 'form-control'] )}}


     {{Form::label ('remarks' ,'Remarks' )}}
     {{Form::text ('remarks' ,'',  ['class' => 'form-control'] )}}

     
])}};
</div>



{!! Form::close() !!}


@endsection
