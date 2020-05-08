@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a new Department</h1>
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
        <a style="margin: 19px;" href="{{ route('departments.create')}}" class="btn btn-primary">New Department</a>
        </div>
      <form method="post" action="{{ route('departments.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          </div>
          <div class="form-group">
              <label for="email">Remark:</label>
              <input type="text" class="form-control" name="remark"/>
          </div>
          <button type="submit" class="btn btn-success">Add Department</button>
      </form>
  </div>
</div>
</div>
@endsection
