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
        <form method="post" action="{{ route('tickets.update', $ticket->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="first_name">User id:</label>
                <input type="text" class="form-control" name="u_id" value={{ $ticket->u_id }} />
            </div>
            <div class="form-group">
                <label for="last_name">Department id:</label>
                <input type="text" class="form-control" name="de_id" value={{ $ticket->de_id }} />
            </div>
            <div class="form-group">
                <label for="email">Priority:</label>
                <input type="text" class="form-control" name="priority" value={{ $ticket->priority }} />
            </div>
            <div class="form-group">
                <label for="city">Description:</label>
                <input type="text" class="form-control" name="description" value={{ $ticket->description }} />
            </div>
            <div class="form-group">
                <label for="country">File:</label>
                <input type="text" class="form-control" name="file" value={{ $ticket->file }} />
            </div>
            <div class="form-group">
                <label for="job_title">Status:</label>
                <input type="text" class="form-control" name="status" value={{ $ticket->status }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
