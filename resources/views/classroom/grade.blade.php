

{{-- @foreach ($classworks as $classwork)
    {{ $classwork->title }}
@endforeach

<br>

@foreach ($students as $student)
    {{ $student->name }}
    <br>        
@endforeach --}}

@extends('layouts.headerCreated')

@section('content')

<h2>ពិន្ទុ</h2>
<br>
{{-- <table>
@foreach ($classworks as $classwork)
<tr>
    <th>Name  /  Classwork</th>
    <th>{{ $classwork->title }}</th>
</tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->name }}</td>
        <td>
          <form id="scoreform" class="scoreform" action="" method="POST">
            <input type="text" name="score" class="scoreinput" id="scoreinput">
          </form> 
          <a href="{{ route("studentwork", [$classwork->id , $student->id]) }}">view</a>
        </td>
    </tr>   
    @endforeach
@endforeach
</table>
      <div class='printchatbox' id='printchatbox'></div>
      <script>
        var inputBox = document.getElementById('scoreinput');
        var scoreform = document.getElementById('scoreform');

        inputBox.onblur = function(){
            document.getElementById('printchatbox').innerHTML = inputBox.value;
            scoreform.addEventListener("submit", (e) => {
            e.preventDefault()
            console.log("Form submitted!");
            });
        }

      </script>  --}}
      <table class="table table-bordered">
        
          <thead>
            <tr>
              <th style="padding: 20px">ឈ្មោះសិស្ស  /  កិច្ចការ</th>
              @foreach ($classworks as $classwork)
              <th style="padding: 20px">{{ $classwork->title }}</th>
              @endforeach
            </tr>
          </thead>
       
          <tbody>
            @foreach ($students as $student)
            <tr>
              <td style="padding: 30px">{{ $student->name }}</td>
              <td>
                <form id="scoreform" class="scoreform" action="" method="POST">
                  <input name="s_id" type="hidden" value="{{ $student->id }}">
                  <input type="text" name="score" class="scoreinput" id="scoreinput" style="width: 50px;"> / {{ $classwork->score }}
                </form> 
                <a href="{{ route("studentwork", [$classwork->id , $student->id]) }}">មើល</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        
      </table>
      <div class='printchatbox' id='printchatbox'></div>
      <script>
        var inputBox = document.getElementById('scoreinput');
        var scoreform = document.getElementById('scoreform');

        inputBox.onblur = function(){
            document.getElementById('printchatbox').innerHTML = inputBox.value;
            scoreform.addEventListener("submit", (e) => {
            e.preventDefault()
            console.log("Form submitted!");
            });
        }

      </script>

@stop