
@extends('my_admin.admin_master')
@section('my_admin')
          <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Manage Our Vision</h1>
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>
        </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> <a href="{{ route('dashvision.create_vision')}}"  title="Create New" class="btn btn-primary btn-sm">Create New</a></h3>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>Photo</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($our_visions as $id => $our_vision)
                                                        <tr>
                                                            <td>{{ ++$id}}</td>
                                                            <td>{{ $our_vision->title}}</td>

                                                            <td>{{Str::limit($our_vision->description,100)}}</td>
                                                            <td>
                                                            <img src="{{ asset ('images/'.$our_vision->image)}}" width="70px" hieght="70px" alt="">
                                                            </td>
                                                            <td>
                                                                <a href="{{route('dashvision.edit',$our_vision->id)}}" title="Edit" class="btn btn-success btn-sm">Edit</a>
                                                                <a href="{{route('dashvision.delete',$our_vision->id)}}" title="Delete" class="btn btn-danger btn-sm">Delete</a>
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


