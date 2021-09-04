
@extends('my_admin.admin_master')
@section('my_admin')
          <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Manage Class Tests</h1>
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
                                            <h3 class="title"> <a href="{{ route('dashclasstests.create_classtests')}}"  title="Create New" class="btn btn-primary btn-sm">Create New</a></h3>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Course Name</th>
                                                            <th>Course Description</th>
                                                            <th>Link</th>
                                                            <th>Photo</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($class_tests as $id => $class_test)
                                                        <tr>
                                                            <td>{{ ++$id}}</td>
                                                            <td>{{ $class_test->courses_name}}</td>
                                                            <td><?php echo html_entity_decode($class_test->courses_description, ENT_COMPAT);?></td>
                                                            <td>{{ $class_test->link_to_class}}</td>
                                                            <td>
                                                            <img src="{{ asset ('images/'.$class_test->image)}}" width="70px" hieght="70px" alt="">
                                                            </td>
                                                            <td>
                                                                <a href="{{route('dashclasstests.edit',$class_test->id)}}" title="Edit" class="btn btn-success btn-sm">Edit</a>
                                                                <a href="{{route('dashclasstests.delete',$class_test->id)}}" title="Delete" class="btn btn-danger btn-sm">Delete</a>
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
