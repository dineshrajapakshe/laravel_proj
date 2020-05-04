@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><strong>My Account</strong></div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td style="width: 150px;">Name</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td style="width: 150px;">User Role</td>
                            <td>{{ Auth::user()->r_id }}</td>
                        </tr>
                        <tr>
                            <td style="width: 150px;">Email</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                    </table>
                </div>
                <a href="#" style="text-decoration: none;">
                    <div class="card-header"><strong>Department Model +</strong></div>
                </a>
                <a href="#" style="text-decoration: none;">
                    <div class="card-header"><strong>User Model +</strong></div>
                </a>
                <a href="#" style="text-decoration: none;">
                    <div class="card-header"><strong>Tickets Model +</strong></div>
                </a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi Admin {{ Auth::user()->name }} </div>
                <div class="card-body">
                    <!-- @if (session('status'))
                    @endif -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center bg-primary">Support</div>
                                    <div class="card-body text-center">
                                        <h1>05</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center bg-warning">Pending</div>
                                    <div class="card-body text-center">
                                        <h1>05</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center bg-success">Success</div>
                                    <div class="card-body text-center">
                                        <h1>05</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection