


@extends('my_admin.admin_master')
@section('my_admin')
                    <div class="title-block">
                        <h3 class="title">Add Class Tests<span class="sparkline bar" data-type="bar"></span>
                        </h3>
                    </div>
                    <form name="item" action="{{ route('dashclasstests.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right">Courses Name: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" name="courses_name" id="courses_name" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right">Descriptions: </label>
                                  <div class="col-sm-10">
                                     <textarea class="form-control"  name="courses_description" id="courses_description"  rows="5" id="comment"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right">Link: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" name="link_to_class" id="link_to_class" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                        <input type="file" class="form-control" name="image" id="image" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary btn-sm" title="Add Now"> Add New </button>
                                    <a href="{{ route('dashclasstests.index_classtests')}}" title="Back" class="btn btn-info btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'courses_description',{
    extraPlugins :'colorbutton,font,youtube',

});
</script>
@endsection





