@extends('layout.template')
@section('form')

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
                        <h4 id="headerTitle">PREKELAB HIGH SCHOOL</h4>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 addTo">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-top: 5%;">+</button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content"style="text-align: left;">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                    <a href="">
                                        <div class="modal-body" style="border-bottom: 1px solid #e4e9eb;">
                                            <p>Create Class</p>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="modal-body">
                                            <p>Join Class</p>
                                        </div>
                                    </a>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <!-- <p id="addTo">+</p> -->
                    </div>
                </div>
            </div>

        <!-- form create -->
        <div  class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 createContainer" >
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form" style="width: 50%;">
                        <center><h1>Create Class</h1>
                            <hr>
                        </center>
                        <form action="" method="POST">
                            @csrf
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <input class="formInput" type="text" placeholder="Enter Your Name" name="name" id="name" required><br/>
                                <input class="formInput" type="text" placeholder="Subject" name="subject" id="subject" required><br/>
                                <input class="formInput" type="text" placeholder="Room" name="room" id="room" required><br/>
                                <button class="btnCreate" id="submit">Create</button>
                                <button href="" class="btnCreate" id="cancel">Cancel</button>
                                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
