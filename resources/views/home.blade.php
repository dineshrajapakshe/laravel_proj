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
                    <a href="/tickets" type="button" class="btn btn-success ">View All Job</a>
                    <a href="/sysuser" type="button" class="btn btn-success" style="float: right;">Edit Profile</a>
                    </div>
                    <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
