@extends('layouts.app')

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
                <a href="{{ URL::route('addjob') }}" style="text-decoration: none;">
                    <div class="card-header"><strong>Open New Ticket +</strong></div>
                </a>
                <a href="{{ URL::route('cloasedjob') }}" style="text-decoration: none;">
                    <div class="card-header"><strong>Closed Tickets +</strong></div>
                </a>
                <a href="{{ URL::route('pendingjob') }}" style="text-decoration: none;">
                    <div class="card-header"><strong>Pending Tickets +</strong></div>
                </a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi {{ Auth::user()->name }}, Open New Ticket </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped  table-sm mb-0">
                        <thead>
                            <tr>
                                <th style="width: 6%"> Job Id</th>
                                <th style="width: 20%">Client Name</th>
                                <th style="width: 20%">Email Address</th>
                                <th style="width: 15%">Department</th>
                                <th style="width: 10%">Priority </th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Thornton</td>
                                <td>asd</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>ads</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection