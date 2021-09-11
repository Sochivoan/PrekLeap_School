<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="../assets/style/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="fontawesome-free-5.3.1-web/css/all.min.css"> -->
    <link rel="stylesheet" href="../assets/style/header.css">
    <!-- js -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>CreateClass</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Siemreap&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hanuman&family=Siemreap&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Moul&display=swap" rel="stylesheet">


<style>
body {
  /* font-family: "Lato", sans-serif; */
}
/*    font-family: "Siemreap", sans-serif;
   font-family: "Hanuman", serif;
 */
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
  padding: 8px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: ;}
}
.headerTitle h6{
 font-family: "Hanuman", serif;
    font-size: 28px;
     font-weight: 600;
     color: #ffff;
}
{
     font-family: "Hanuman", serif;
}
</style>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 header">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 leftBar" >
                        <div id="mySidenav" class="sidenav" style="background-color:#186C9B">
                            <a href="javascript:void(0)" class="closebtn" style="color:white" onclick="closeNav()">&times;</a>
                            <a style="color:white" href="#">About</a>
                            <a style="color:white" href="#">Services</a>
                            <a style="color:white" href="#">Clients</a>
                            <a style="color:white" href="#">Contact</a>
                        </div>
                        <div id="main">
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
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 headerTitle">
                        <h6>វិទ្យាល័យព្រែកលៀប</h6>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 addTo">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="btnInfo">+</button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content"style="text-align: left;">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                    <a target="_blank" href="{{ route('createClassPage')}}">
                                        <div class="modal-body">
                                            <p>បង្កើតថ្នាក់រៀន</p>
                                        </div>
                                    </a>
                                    <a href="{{ route('joinClassPage') }}">
                                        <div class="modal-body">
                                            <p>ចូលក្នុងថ្នាក់រៀន</p>
                                        </div>
                                    </a>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">បិទ</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <!-- <p id="addTo">+</p> -->
                    </div>
                </div>
          </div>
    </div>
</body>
</html>
