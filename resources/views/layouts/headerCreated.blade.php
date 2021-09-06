{{-- {{ dd(session('classID')) }} --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script> 
    <link rel="stylesheet" href="{{ asset('assets/style/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-5.3.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- <link rel="stylesheet" href="fontawesome-free-5.3.1-web/css/all.min.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/style/headerCreated.css') }}">
    <!-- js -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/style/classCreated.css') }}"  type="text/css">
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
  {{-- {{ dd($classRoomSelected->name) }} --}}
    <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 header">
              <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 leftBar" >
                  <div id="mySidenav" class="sidenav" style="background-color:#186C9B">
                      <a href="javascript:void(0)" class="closebtn" style="color:white" onclick="closeNav()">&times;</a>
                      <a style="color:white" href="#">Stream</a>
                      <a style="color:white" href="#">Classwork</a>
                      <a style="color:white" href="#">People</a>
                      @if (session('userID') === 1)
                        <a style="color:white" href="#">Grade</a>
                      @endif
                  </div>
                  <div id="main" >
                      <span style="font-size:30px;cursor:pointer;color: cornsilk;" onclick="openNav()">&#9776;</span>
                  </div>
                  <script>
                      function openNav() {
                          document.getElementById("mySidenav").style.width = "250px";
                          document.getElementById("main").style.marginLeft = "250px";
                      }
                      function closeNav() {
                          document.getElementById("mySidenav").style.width = "0";
                          document.getElementById("main").style.marginLeft= "0";
                      }
                  </script>
              </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 web" style="padding-top: 10px">
              <!-- <p id="webTitle">web developments</p>
              <p style="top:-20px">Computer Science</p> -->
              <p style="font-family: Roboto,Arial,sans-serif;color:white;font-size:30px;"></p>
               <p style="font-family: Roboto,Arial,sans-serif;color:white;top:-1%; font-size:18px;"></p>  
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7 linkMenu">
              <a id="menu" href="#">Stream</a>
              <a id="menu" href="">Classwork</a>
              <a id="menu" href="#">People</a>
              @if (session('userID') === 1)
                <a id="menu" href="#">Grade</a>
              @endif
            </div>
          </div>
        </div>  
    </div>
    <div class="container">
      @yield('content')
    </div>
</body>
</html>