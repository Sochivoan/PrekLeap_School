
@extends('layouts.headerCreated')

@section('content')
<div class="container ag1">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-10 classbox">
           <h1 style="font-family: Roboto,Arial,sans-serif;color:white">{{ $classRoomSelected->name }}</h1>
           <h3 style="font-family: Roboto,Arial,sans-serif;color:white">{{ $classRoomSelected->subject }}</h3>
           <h5 style="font-family: Roboto,Arial,sans-serif;color:white">Room : {{ $classRoomSelected->room }}</h5>
           <h6 style="font-family: Roboto,Arial,sans-serif;color:white">
                Class code : {{ $classRoomSelected->c_code }} 
                <a href="#">
                    <img class="scanBox" src="../assets/img/prekleab/scan.png">
                </a>
            </h6>
        </div>
    </div>


    <div class="row">
        <div class="imgComment">
            <div id="imgBox">
                <div class="circle">
                    <img class="imgProfile" src="../assets/img/1624085815.jpg">
                </div>
            </div>
            <div id="teatArea">
                <textarea id="annouce" placeholder="មតិយបល់....."></textarea>
            </div>
        </div>
    </div>
    @if ( !@empty($classworks))   
        @foreach ( $classworks as $classwork)
            <div class="row">
                <div class="imgComment">
                    <div id="imgBox">
                        <div class="circle">
                            <img class="imgProfile" src="../assets/img/prekleab/question.png">
                        </div>
                    </div>
                    <div id="titleBox">
                        <p id="title01">{{ $classwork->title }}</p>
                    </div>
                    <div id="date">
                        <p id="dataTitle">{{ $classwork->created_at }}</p>
                        <a href="#" class="btnDot01">
                            <div class="dot01"></div>
                            <div class="dot01"></div>
                            <div class="dot01"></div>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
@stop