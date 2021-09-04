
@extends('my_admin.admin_master')
@section('my_admin')
<!-- @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif -->
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <!-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>
            <div class="row">
            </div>
                <center>
                    <img src="{{ asset('images/logoPrekleap_nobg.png')}}" alt="Prekleap Logo" style="height: 240px;">
                        <h3>
                            <div style="color:#A93226;    font-family: 'Hanuman', serif; font-weight:;">
                                សូម​ស្វាគមន៍​ការ​ចូល​មក​ « វិទ្យាល័យព្រែកលៀប សាលារៀនជំនាន់ថ្មី »​ <br> (NGS)
                            </div>
                        </h3>
                </center>​
            </div>
@endsection

