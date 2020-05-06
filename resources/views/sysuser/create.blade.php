@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a new job</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div>
        <a style="margin: 19px;" href="{{ route('sysuser.create')}}" class="btn btn-primary">New  User</a>
        </div>
      <form method="post" action="{{ route('sysuser.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name">Registered Id:</label>
              <input type="text" class="form-control" name="r_id"/>
          </div>
          <div class="form-group">
              <label for="last_name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </select>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="city">Password:</label>
              <input type="text" class="form-control" name="password"/>
          </div>
          <button type="submit" class="btn btn-success">Add contact</button>
      </form>
  </div>
</div>
</div>
@endsection
