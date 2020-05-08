@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">All Department</h1>
    <a style="margin: 19px;" href="{{ route('tickets.create')}}" class="btn btn-primary">New Department</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Remark</td>
          <td>Created Date</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($departments as $dep)
        <tr>
            <td>{{$dep->id }}</td>
            <td>{{$dep->name}}</td>
            <td>{{$dep->remark}}</td>
            <td>{{$dep->created_at}}</td>
            <td>
                <a href="{{ route('departments.edit',$dep->id)}}" class="btn btn-primary">Edit</a>
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
