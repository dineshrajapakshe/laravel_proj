@extends('base')
@section('main')
<style>
#thumbwrap {
	position:relative;
}
.thumb span {
	position:absolute;
	visibility:hidden;
}
.thumb:hover, .thumb:hover span {
	visibility:visible;
	top:0;
	left:100px;
	z-index:1;
}
</style>
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">All Jobs</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>User id</td>
          <td>Department id</td>
          <td>Priority</td>
          <td>Description</td>
          <td>File</td>
          <td>Status</td>
          <td>Create Date</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tickets as $ticket)
        @if (($ticket->u_id)==(Auth::user()->id) && (Auth::user()->user_level)=='2')
        <tr>
            <td>{{$ticket->id }}</td>
            <td>{{$ticket->u_id}}</td>
            <td>
            @foreach($departments as $dep)
            @if(($ticket->de_id) == ($dep->id))
             {{$dep->name}}
            @endif
            @endforeach
            </td>
            <td>{{$ticket->priority}}</td>
            <td>{{$ticket->description}}</td>
            <td>{{$ticket->file}}</td>
            <td>
            @if(($ticket->status) == 1)
            <span class="badge badge-danger">Pending</span>
            @endif
             @if(($ticket->status) == 2)
             <span class="badge badge-warning">Following Up</span>
            @endif
             @if(($ticket->status) == 3)
             <span class="badge badge-success">Done</span>
            @endif
            </td>
            <td>{{$ticket->created_at}}</td>
            <td>
                <a href="{{ route('tickets.edit',$ticket->id)}}" class="btn btn-primary">Edit</a>
            </td>
             <td>
               <div id="thumbwrap">
               		<a class="thumb" href="#"><img src="{{asset('/upload/'.$ticket->file)}}" alt="" style="width: 120px;"><span><img src="{{asset('/upload/'.$ticket->file)}}" alt=""></span></a>
               </div>
            </td>

        </tr>
        @endif
        @if (($ticket->u_id)==(Auth::user()->id) && (Auth::user()->user_level)=='3'))
        <tr>
            <td>{{$ticket->id }}</td>
            <td>{{$ticket->u_id}}</td>
            <td>
            @foreach($departments as $dep)
            @if(($ticket->de_id) == ($dep->id))
             {{$dep->name}}
            @endif
            @endforeach
            </td>
            <td>{{$ticket->priority}}</td>
            <td>{{$ticket->description}}</td>
            <td>{{$ticket->file}}</td>
            <td>
            @if(($ticket->status) == 1)
            <span class="badge badge-danger">Pending</span>
            @endif
             @if(($ticket->status) == 2)
             <span class="badge badge-warning">Following Up</span>
            @endif
             @if(($ticket->status) == 3)
             <span class="badge badge-success">Done</span>
            @endif
            </td>
            <td>{{$ticket->created_at}}</td>
            <td>
                <a href="{{ route('tickets.edit',$ticket->id)}}" class="btn btn-primary">Edit</a>
            </td>

        </tr>
        @endif
        @if ((Auth::user()->user_level)=='1')
        <tr>
            <td>{{$ticket->id }}</td>
            <td>{{$ticket->u_id}}</td>
            <td>
                @foreach($departments as $dep)
                @if(($ticket->de_id) == ($dep->id))
                {{$dep->name}}
                @endif
                @endforeach
            </td>
            <td>{{$ticket->priority}}</td>
            <td>{{$ticket->description}}</td>
            <td>{{$ticket->file}}</td>
            <td>
            @if(($ticket->status) == 1)
            <span class="badge badge-danger">Pending</span>
            @endif
             @if(($ticket->status) == 2)
             <span class="badge badge-warning">Following Up</span>
            @endif
             @if(($ticket->status) == 3)
             <span class="badge badge-success">Done</span>
            @endif
            </td>
            <td>{{$ticket->created_at}}</td>
            <td>
                <a href="{{ route('tickets.edit',$ticket->id)}}" class="btn btn-primary">Edit</a>
            </td>
             <td>
               <div id="thumbwrap">
                 <a class="thumb" href="#"><img src="{{asset('/upload/'.$ticket->file)}}" alt="" style="width: 120px;"><span><img src="{{asset('/upload/'.$ticket->file)}}" alt=""></span></a>
              </div>
            </td>

        </tr>
        @endif
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>
