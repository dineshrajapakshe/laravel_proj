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
                                        <input class="form-control" type="text" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="row form-group">
                                <label class="col-md-4 control-label">Account Name </label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <input class="form-control" type="text" value="{{ Auth::user()->name }}">
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
                                <div class="col-md-6 inputGroupContainer">
                                    <div class="input-group">
                                    <input value="Update" class="form-control btn btn-success" type="button">
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