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
        <a style="margin: 19px;" href="{{ route('tickets.create')}}" class="btn btn-primary">New Job</a>
        </div>
      <form method="post" action="{{ route('tickets.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name">User Id:</label>
              <input type="text" class="form-control" name="u_id"/>
          </div>
          <div class="form-group">
              <label for="last_name">Department Id:</label>
              <select name="de_id" class="form-control">
                      <option value="0">Select</option>
                      @foreach($departments as $department)
                       <option value="{{ $department->de_id}}">{{ $department->name}}</option>
                      @endforeach
              </select>
          </select>
          </div>
          <div class="form-group">
              <label for="email">Priority:</label>
              <input type="text" class="form-control" name="priority"/>
          </div>
          <div class="form-group">
              <label for="city">Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="country">File:</label>
              <input type="text" class="form-control" name="file"/>
          </div>
          <div class="form-group">
              <label for="job_title">Status:</label>
              <input type="text" class="form-control" name="status"/>
          </div>
          <button type="submit" class="btn btn-success">Add contact</button>
      </form>
  </div>
</div>
</div>
@endsection
