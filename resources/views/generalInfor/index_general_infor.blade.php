
@extends('my_admin.admin_master')
@section('my_admin')
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Manage General Informations</h1>
            </div>
        </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> <a href="{{ route('generalInfor.create_general_infor')}}"  title="Create New" class="btn btn-primary btn-sm">Create New</a></h3>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">

                                                    <thead>
                                                        <tr>
                                                        <th>#</th>
                                                        <th>Telephone</th>
                                                        <th>Mobile</th>
                                                        <th>E-mail</th>
                                                        <th>Address</th>
                                                        <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($general_infors as $id => $general_infor)
                                                        <tr>
                                                            <td>{{ ++$id}}</td>
                                                            <td>{{$general_infor->school_tel}}</td>
                                                            <td>{{$general_infor->school_mobile}}</td>
                                                            <td>{{$general_infor->school_email}}</td>
                                                            <td><?php echo html_entity_decode($general_infor->address, ENT_COMPAT);?></td>
                                                            <td>
                                                                <a href="{{route('generalInfor.edit',$general_infor->id)}}" title="Edit" class="btn btn-success btn-sm">Edit</a>
                                                                <a href="{{route('generalInfor.delete',$general_infor->id)}}" title="Delete" class="btn btn-danger btn-sm">Delete</a>
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



