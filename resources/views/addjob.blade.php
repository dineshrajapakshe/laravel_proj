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
                    <!-- @if (session('status'))
                    @endif -->
                    <div class="col-md-12">
                        <form class="well form-horizontal" action=" " method="post" id="contact_form">
                            <fieldset>
                                <!-- Text input-->
                                <div class="row form-group">
                                    <label class="col-md-4 control-label">User Email</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input class="form-control" type="text" value="{{ Auth::user()->email }}" readonly>
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input-->

                                <div class="row form-group">
                                    <label class="col-md-4 control-label">Account Name </label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group">
                                            <input class="form-control" type="text" value="{{ Auth::user()->name }}" readonly>
                                            <input class="form-control" type="hidden" name="u_id" value="{{ Auth::user()->id }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-md-4 control-label">Contact No</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input name="last_name" placeholder="Contact Number" class="form-control" type="number">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-md-4 control-label">Department</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group">
                                            <select name="department" class="form-control selectpicker">
                                                <option value="">Select Department</option>
                                                <option value="">{{ $user ?? ''->department->name }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-md-4 control-label">Priority Level</label>
                                    <div class="col-md-8 selectContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                            <select name="priority" class="form-control selectpicker">
                                                <option value="1">Low Priority</option>
                                                <option value="2">Medium Priority</option>
                                                <option value="3">High Priority</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-4 control-label">Your Problem</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group">
                                            <textarea class="col-md-12" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-4 control-label">Attachments</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group">
                                            <input name="file" class="form-control" type="file">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-6 inputGroupContainer">
                                        <div class="input-group">
                                            <input value="Submit Ticket" class="form-control btn btn-success" type="button">
                                        </div>
                                    </div>
                                    <div class="col-md-6 inputGroupContainer">
                                        <div class="input-group">
                                            <input value="Reset" class="form-control btn btn-warning" type="button">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection