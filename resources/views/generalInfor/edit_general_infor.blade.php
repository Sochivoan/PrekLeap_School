
@extends('my_admin.admin_master')
@section('my_admin')
                    <div class="title-block">
                        <h3 class="title">Add Informations<span class="sparkline bar" data-type="bar"></span>
                        </h3>
                    </div>
                    <form name="item" action="{{ route('generalInfor.update',$general_infor->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right">School-Telephone:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" name="school_tel" id="school_tel" placeholder=""  value="{{$general_infor->school_tel}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right">School-Mobile:</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" name="school_mobile" id="school_mobile" placeholder=""  value="{{$general_infor->school_mobile}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right">School-Email:</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control boxed" name="school_email" id="school_email" placeholder="" value="{{$general_infor->school_email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right">School-Address:</label>
                                  <div class="col-sm-10">
                                     <textarea class="form-control"  name="address" id="address"  rows="5" id="comment">{{$general_infor->address}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary btn-sm" title="Add Now"> Add New </button>
                                    <a href="{{ route('generalInfor.index_general_infor')}}" title="Back" class="btn btn-info btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'address',{
    extraPlugins :'colorbutton,font,youtube',

});
</script>
@endsection







