@extends('base')
@section('main')
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
        <tr>
            <td>{{$ticket->id }}</td>
            <td>{{$ticket->u_id}}</td>
            <td>{{$ticket->de_id}}</td>
            <td>{{$ticket->priority}}</td>
            <td>{{$ticket->description}}</td>
            <td>{{$ticket->file}}</td>
            <td>{{$ticket->status}}</td>
            <td>{{$ticket->created_at}}</td>
            <td>
                <a href="{{ route('tickets.edit',$ticket->id)}}" class="btn btn-primary">Edit</a>
            </td>

        </tr>
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
