
@extends('my_admin.admin_master')
@section('my_admin')
          <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Manage AboutUs</h1>
            </div>
        </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> <a href="{{ route('dashaboutus.create_about_us')}}"  title="Create New" class="btn btn-primary btn-sm">Create New</a></h3>
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
                                                    @foreach($about_uss as $id => $about_us)
                                                        <tr>
                                                            <td>{{ ++$id}}</td>
                                                            <td>{{ $about_us->title}}</td>
                                                            <td>@php echo html_entity_decode(substr($about_us->description, 0, 150),ENT_COMPAT) @endphp..</td>
                                                            <td>
                                                            <img src="{{ asset ('images/'.$about_us->image)}}" width="70px" hieght="70px" alt="">
                                                            </td>
                                                            <td>
                                                                <a href="{{route('dashaboutus.edit',$about_us->id)}}" title="Edit" class="btn btn-success btn-sm">Edit</a>
                                                                <a href="{{route('dashaboutus.delete',$about_us->id)}}" title="Delete" class="btn btn-danger btn-sm">Delete</a>
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

