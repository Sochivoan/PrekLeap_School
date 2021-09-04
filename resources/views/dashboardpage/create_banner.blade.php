
@extends('my_admin.admin_master')
@section('my_admin')
        <div class="title-block">
            <h3 class="title"> Add new Banner <span class="sparkline bar" data-type="bar"></span>
            </h3>
        </div>
        <form name="item" action="{{ route('dashboardpage.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card card-block">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Images: </label>
                    <div class="col-sm-12">
                        <div class="images-container">
                            <input type="file" class="form-control" name="image" id="image" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary btn-sm" title="Add Now">Add Now</button>
                        <a href="{{ route('dashboardpage.index_banner')}}" title="Back" class="btn btn-info btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </form>
@endsection


