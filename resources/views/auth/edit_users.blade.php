
@extends('my_admin.admin_master')
@section('my_admin')
                    <div class="title-block">
                        <h3 class="title">Edit User<span class="sparkline bar" data-type="bar"></span>
                        </h3>
                    </div>
                    <form name="item" action="{{ route('auth.update',$users->id)}}" method="POST" enctype="multipart/form-data">
                     @csrf
                        <div class="card card-block">
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label text-xs-right">First Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control boxed" name="first_name" id="first_name" placeholder="" value="{{ $users->first_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label text-xs-right">Last Name: </label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control boxed" name="last_name" id="last_name" placeholder="" value="{{ $users->last_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label text-xs-right">E-mail: </label>
                                  <div class="col-sm-9">
                                    <input type="email" class="form-control boxed" name="email" id="email" placeholder="" value="{{ $users->email}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label text-xs-right">Users Type:</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="user_type" id="user_type">
                                                <option>Teacher</option>
                                                <option>Student</option>
                                            </select>
                                        </div>
                                </label>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary btn-sm" title="Add Now"> Add New </button>
                                    <a href="{{ route('auth.user_lists')}}" title="Back" class="btn btn-info btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'description',{
    extraPlugins :'colorbutton,font,youtube',

});
</script>
@endsection















