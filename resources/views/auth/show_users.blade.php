@extends('my_admin.admin_master')
@section('my_admin')

   <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            User / <span class="text-primary"> {{ $users->first_name}} {{ $users->last_name}}</span>
                        </div>
                    </div>

                <div class="card">
                    <div class="card-body">
                        <br>
                        <div class="container bootstrap snippets bootdey">
                    <div class="panel-body inf-content">
                        <div class="row">
                            <div class="col-md-12">
                                <strong>Information</strong><br>
                                <div class="table-responsive">
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-user  text-primary"></span>First Name
                                                </strong>
                                            </td>
                                            <td class="text-primary">: {{$users->first_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-eye-open text-primary"></span>Last Name
                                                </strong>
                                            </td>
                                            <td class="text-primary">: {{$users->last_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-envelope text-primary"></span>E-mail
                                                </strong>
                                            </td>
                                            <td class="text-primary">: {{$users->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-calendar text-primary"></span>User Type
                                                </strong>
                                            </td>
                                            <td class="text-primary">: {{$users->user_type}}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>
                                                    <span class="glyphicon glyphicon-calendar text-primary"></span>Created At
                                                </strong>
                                            </td>
                                            <td class="text-primary">: {{$users->created_at}}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                             <a href="{{ route('auth.user_lists')}}" class="btn btn-block btn-primary btn-sm">{{ __('Return') }}</a>
                        </div>
                    </div>
                </div>
            </div>
@endsection
