
{{-- <h1>Teacher</h1> 

<h2>{{ $teacher->name }}</h2>

<h1>Students</h1>

@foreach ($students as $student)
    <h2>{{ $student->name }}</h2>
@endforeach --}}


@extends('layouts.headerCreated')

@section('content')
<br>
<div class="container-fluid bar-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 content-people">
               <div class="class-cher">
                   <h2>គ្រូបង្រៀន</h2>
               </div>
               <br>
                <div class="class-about-cher">
                    <ul>
                        <li>
                            <div class="cher-img">
                                <img src="{{ asset('assets/img/1624085815.JPG')}}" alt="">
                            </div>
                            <div class="cher-name">
                                {{ $teacher->name }}
                            </div>
                        </li>
                    </ul>
                </div>
               <!-- Class mate -->
                <div class="class-mates">
                    <ul>
                        <li>
                            <a href="#">សិស្ស</a>
                        </li>
                        <li>
                            <a href="#">{{ count($students) }} នាក់</a>
                        </li>
                    </ul>
               </div>
               @foreach ($students as $student)
                <div class="class-student">
                    <ul>
                        <li>
                            <div class="student-img">
                                <img src="{{ asset('assets/img/1624085815.JPG')}}" alt="">
                            </div>
                            <div class="student-name">
                                {{ $student->name }}
                            </div>
                        </li>
                    </ul>
                    </div>
               @endforeach

            </div>
        </div>
    </div>
</div>
@stop
