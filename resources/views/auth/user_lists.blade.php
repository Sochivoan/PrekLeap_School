
@extends('my_admin.admin_master')
@section('my_admin')
          <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Manage Users</h1>
            </div>
        </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> <a href="{{ route('auth.created_users')}}"  title="Create New" class="btn btn-primary btn-sm">Create New</a></h3>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>E-mail</th>
                                                            <th>User Type</th>
                                                            <th>Created By</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($user_lists as $id=>$users)
                                                        <tr>
                                                            <td>{{ ++$id}}</td>
                                                            <td>{{ $users->first_name}}</td>
                                                            <td>{{ $users->last_name}}</td>
                                                            <td>{{ $users->email}}</td>
                                                            <td>{{ $users->user_type}}</td>
                                                            <td>{{ $users->created_at}}</td>
                                                            <td>
                                                                <a href="{{route('auth.edit',$users->id)}}" title="Edit" class="btn btn-success btn-sm">Edit</a>
                                                                <a href="{{route('auth.show',$users->id)}}" title="Edit" class=" btn btn-warning btn-sm">Show</a>
                                                                <a href="{{route('auth.delete',$users->id)}}" title="Delete" class="btn btn-danger btn-sm">Delete</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
@endsection

