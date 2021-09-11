
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="../assets/style/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="fontawesome-free-5.3.1-web/css/all.min.css"> -->
    <link rel="stylesheet" href="../assets/style/createClass.css">
    <!-- js -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>CreateClass</title>

    <style>
        .createContainer h1{
            font-family: "Siemreap", sans-serif;
        }
        .container-fluid input{
            font-family: "Siemreap", sans-serif;
        }
        .container-fluid form button{
             font-family: "Siemreap", sans-serif;
             font-size: 19px
        }
        .container-fluid form a
        {
            font-family: "Siemreap", sans-serif;
            color: #fff;
             font-size: 19px;
             background-color: red;
             width: 150px;
             height: 45px;
             padding:12px
        }

    </style>
</head>
<body>

        @include('classroom.header')
        <!-- form create -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div  class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 createContainer" >
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form" style="width: 50%;">
                        <center><h1>បង្កើតថ្នាក់រៀន</h1>
                            <hr>
                        </center>
                        <form action="{{ route('createClass') }}" method="POST">
                            @csrf
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <input class="formInput" type="text" placeholder="ឈ្មោះថ្នាក់រៀន" name="class_name"><br/>
                                <input class="formInput" type="text" placeholder="មុខវិជ្ជា" name="class_subject"><br/>
                                <input class="formInput" type="text" placeholder="លេខថ្នាក់រៀន" name="class_room"><br/>
                                <button class="btnCreate" id="submit" type="submit">បង្កើត</button>
                                <a href="{{ route('login') }}" class="btn"  id="">បិទ</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end form create -->
        <!-- -----------Test-------------- -->
        @extends('classroom.footer')
</body>
</html>



