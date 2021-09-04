

@extends('my_admin.admin_master')
@section('my_admin')
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Manage Room Tiltes</h1>
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
                                            <h3 class="title"> <a href="{{route('dashclassroomtitle.create_classroomtitle')}}"  title="Create New" class="btn btn-primary btn-sm">Create New</a></h3>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach($class_rooms_titles as $id => $rooms_title)
                                                        <tr>
                                                            <td>{{ ++$id}}</td>
                                                            <td>{{ $rooms_title->title}}</td>
                                                            <td><?php echo html_entity_decode($rooms_title->description, ENT_COMPAT);?></td>
                                                            <td>
                                                                <a href="{{ route('dashclassroomtitle.edit',$rooms_title->id)}}" title="Edit" class="btn btn-success btn-sm">Edit</a>
                                                                <a href="{{ route('dashclassroomtitle.delete',$rooms_title->id)}}" title="Delete" class="btn btn-danger btn-sm">Delete</a>
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


