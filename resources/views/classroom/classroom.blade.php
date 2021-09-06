
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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */


/* The popup form - hidden by default */
.form-popup {
    width: 120px;
    /* background-color: orangered; */
    height: auto;
    display: none;
    position: absolute;
    top: 17%;
    right: 4%;
    border: 3px solid #f1f1f1;
    z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 100%;
  padding: 10px;
  background-color: white;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 8px 10px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:8px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

</head>
<body>
        @include('classroom.header')
    
        <div  class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding:0px">
                <div  class="CardItem">
                    <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 cardContainer" >
                                @foreach ( $classroomChecked as $classroom)
                                <a href="{{ route('classroom.show',$classroom->id) }}" style="color: inherit;">
                                <div class="card">
                                    <div class="cardHeader">
                                        <div class="cardTitle">
                                            <p id="subject">{{ $classroom->name }}</p>
                                            <p id="subject">{{ $classroom->subject }}</p>
                                            <p id ="room">Room : {{ $classroom->room }}</p>
                                        </div>
                                        <a href="#" class="btnDot" onclick="openForm1('add')">
                                        {{-- <!-- {{ route('classroom.classCreated') }} --> --}}
                                            <div  class="dot"></div>
                                            <div href="#" class="dot"></div>
                                            <div href="#" class="dot"></div>
                                        </a>
                                        <div class="form-popup" id="add">
                                            <form action="/action_page.php" class="form-container">
                                                <button type="submit" class="btn">Update</button>
                                                <button type="submit" class="btn">Delete</button>
                                                <button type="button" class="btn cancel" onclick="closeForm1('add')">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="cardBody">
                                        
                                    </div>
                                    <div class="cardFooter" style="text-align: center; padding: 10px">
                                        Enjoy your class!
                                    </div>
                                </div>
                                </a>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</body>
</html>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function openForm1() {
  document.getElementById("add").style.display = "block";
}
function closeForm1() {
  document.getElementById("add").style.display = "none";
}

</script>
