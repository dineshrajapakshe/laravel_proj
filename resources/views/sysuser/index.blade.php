@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">All System User</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Registerd id</td>
          <td>Name</td>
          <td>Email</td>
          <td>Email Verified Time</td>
          <td>Created Date</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id }}</td>
            <td>{{$user->r_id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email }}</td>
            <td>{{$user->email_verified_at}}</td>
            <td>{{$user->created_at}}</td>
            <td>
                <a href="{{ route('sysuser.edit',$user->id)}}" class="btn btn-primary">Edit</a>
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
