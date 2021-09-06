
@extends('layouts.headerCreated')

@section('content')
  {{-- {{ dd($allClassworks) }} --}}
  <div style="margin-top: 80px">
    <!-- Example single danger button -->
    @if (session('userID') === 1)
      <div class="btn-group ">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          បង្កើតកិច្ចការ
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{ route('classroom.classwork.question') }}">Question</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Assignment</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">MCQ</a>
        </div>
      </div>
    @endif
    <br><br><br><br>
    @foreach ( $allClassworks as $classwork)
      <div class="row">
          <div class="imgComment">
              <div id="imgBox">
                  <div class="circle">
                      <img class="imgProfile" src="{{ asset('assets/img/prekleab/question.png') }}">
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
</div>

@stop


