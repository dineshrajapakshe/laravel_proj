@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Profile</h1>
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
        <form method="post" action="{{ route('sysuser.update', $user->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="first_name">User id:</label>
                <input type="text" class="form-control" name="r_id" value={{ $user->r_id }} />
            </div>
            <div class="form-group">
                <label for="last_name">Department id:</label>
                <input type="text" class="form-control" name="name" value={{ $user->name }} />
            </div>
            <div class="form-group">
                <label for="email">Priority:</label>
                <input type="text" class="form-control" name="email" value={{ $user->email}} />
            </div>
            <div class="form-group">
                <label for="city">Description:</label>
                <input type="text" class="form-control" name="password" value={{ $user->password}} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
