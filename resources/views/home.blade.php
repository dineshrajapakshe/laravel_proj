@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                     @if ((Auth::user()->user_level) == '3')
                    <a href="/tickets/create" type="button" class="btn btn-success ">Open Ticket</a>
                    <a href="/password/reset" type="button" class="btn btn-success" >Edit Profile</a>
                    <a href="/tickets" type="button" class="btn btn-success ">View Tickets</a>
                     @endif
                      @if ((Auth::user()->user_level) == '2')
                     <a href="/tickets" type="button" class="btn btn-success ">View All Tickets</a>
                      @endif
                      @if ((Auth::user()->user_level) == '1')
                     <a href="/tickets" type="button" class="btn btn-success ">Manage Tickets</a>
                     <a href="/sysuser" type="button" class="btn btn-success">Manage Profile</a>
                     <a href="/departments" type="button" class="btn btn-success">Add Department</a>
                      @endif
                    </div>
                    <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
