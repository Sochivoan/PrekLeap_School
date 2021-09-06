<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Questions</title>

  <link rel="stylesheet" href="{{ asset('assets\fontawesome-free-5.3.1-web\css\all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/style/bootstrap.min.css') }}">
  <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
</head>
<body>

<div class="container">
    <div class="modal-header">
      <div class="title">បង្កើតសំនួរ</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <form method="post" action="{{route('question.store')}}">
      @csrf
      <div class="form-group row">
        <div class="container">
          <div class="row">
              <div class="col-lg-12 modal-body">
                  <div class="question-box ">
                      <label for="">ចំណងជើង</label><br>
                      <input type="text" name="title" placeholder="Title"><br> <br>
                      <label for="">ការណែនាំ</label>
                      <input type="text" name="instruction" placeholder="Instruction"><br><br>
                  </div>
                  <div class="score-box">
                      <label for="">ពិន្ទុ</label><br>
                      <input type="text" name="score" placeholder="Score" class="select"><br>
                  </div>
                  <div class="score-box">
                      <label for="" >កាលបរិច្ឆេទ​ផុតកំណត់</label><br>
                      <input type="date" name="due_date" placeholder="due_date" class="select">
                  </div>
              </div>
          </div>
        </div>   
        <div class="table-responsive">          
        <table class="table">
          <thead>
            <tr>
                <th>#</th>
              <th>សំនួរ</th>
              <th><a href="javascript:;" class="btn btn-info addRow">+</a></th>
            </tr>   
          </thead>
          <tbody>
            <tr>
                <td>1</td>
              <td><input type="text" name="question[]" class="form-control" id="question"></td>
              <td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
      <input type="submit" value="បង្កើត" class="btn btn-success">
    </form>
</div>
<script>
    var number = 1;
    $('thead').on('click', '.addRow' , function(){
        number = number + 1;
        var tr = '<tr>'+'<td>'+number+'</td>'+'<td>'+'<input type="text" name="question[]" class="form-control" id="question">'+'</td>'+'<td>'+'<a href="javascript:;" class="btn btn-danger deleteRow">-</a>'+'</td>'+'</tr>';     
        $('tbody').append(tr);
    });
    $('tbody').on('click', '.deleteRow', function(){
        $(this).parent().parent().remove();
        number = number - 1;
    })
</script> 
</body>
</html>

  