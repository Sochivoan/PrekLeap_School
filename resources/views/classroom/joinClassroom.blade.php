z
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="../assets/style/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="fontawesome-free-5.3.1-web/css/all.min.css"> -->
    <link rel="stylesheet" href="../assets/style/joinClass.css">
    <!-- js -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>CreateClass</title>


<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

</head>
<body>
@include("classroom.header")
        <!-- form create -->
    <div  class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 createContainer">
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
                <div class="form">
                    <h3 id="text">លេខកូដថ្នាក់រៀន</h3>
                    <p id="text">អ្នកអាចសួរអំពីលេខកូដថ្នាក់រៀនពីលោកគ្រូ ឫ អ្នកគ្រូរបស់អ្នក</p>
                    <form action="{{ route('joinClassroom') }}" method="POST">
                      @csrf
                        <input class="InputBox" type="text" placeholder="បញ្ចូលលេខកូដថ្នាក់រៀន" name="c_code"><hr/>
                        <button class="btnCreate" id="join" style="float: right;">ចូល</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    
        <!-- end form create -->
        <!-- -----------Test-------------- -->
   
        @extends("classroom.footer")
    
</body>
</html>