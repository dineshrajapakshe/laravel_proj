@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Jobs</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('departments.update', $department->id ) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="first_name">User id:</label>
                <input type="text" class="form-control" name="name" value={{ $department->name }} />
            </div>
            <div class="form-group">
                <label for="last_name">Department id:</label>
                <input type="text" class="form-control" name="remark" value={{ $department->remark }} />
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
