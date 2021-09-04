
@extends('my_admin.admin_master')
@section('my_admin')
                    <div class="title-block">
                        <h3 class="title">Edit Benefits<span class="sparkline bar" data-type="bar"></span>
                        </h3>
                    </div>
                    <form name="item" action="{{ route('dashbenefits.update',$benefit->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right">Title:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" name="name" id="name" placeholder="" value="{{ $benefit->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right">Descriptions: </label>
                                  <div class="col-sm-10">
                                     <textarea class="form-control"  name="description" id="description"  rows="5" id="comment">{{  $benefit->description }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Images: </label>
                                <div class="col-sm-10">
                                    <div class="images-container">
                                        <input type="file" class="form-control" name="image" id="image" placeholder="" value="{{ $benefit->image }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary btn-sm" title="Update"> Update</button>
                                    <a href="{{ route('dashbenefits.index_benefits')}}" title="Back" class="btn btn-info btn-sm">Back</a>
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








