<?php
    include('database.php');
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>SignUp</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" >
  </head>
<body class="text-center mt-5">

    <form id="signupform">
        <img class="mb-4" src="img/10.png" alt="" width="400" height="100">
        <h1 class="h3 mb-3 font-weight-normal">CPEN @ SES SignUp Page </h1>
        <div class=" mt-4 row ">
            <p>Register with your Details below. <code>(this was given to you in your admisssion letter)</code></p>
            <div class="col-4"></div>
           <div class="form-label-group col-2">
                    <input type="text"  id="inputfname" class="form-control" placeholder="FirstName">
           </div>
            <div class="form-label-group col-2">
                <input type="text"  id="inputlname" class="form-control" placeholder="Last Name" >
                
            </div>
            <div class="col-4"></div>
        </div> 
        <div class=" mt-4 row ">
            <div class="col-4"></div>
           <div class="col-2">
                <input type="text"  id="inputmail" class="form-control" placeholder="Student Mail" >
            </div>
            <div class="col-2">
                <input type="int" maxlength="8" size="8" id="inputid" class="form-control" placeholder="Student ID" >
            </div>
            <div class="col-4"></div>
        </div>    
        <div class="mt-4 row">
            <div class="col-4"></div>
            <div class="col-2">
                <input type="password" maxlength="5" size="5" id="inputpin" class="form-control" placeholder="Pin">
            </div>
            <div class="col-2">
                 <input type="text"  id="inputnum" maxlength="10" size="10" class="form-control" placeholder="Phone Number" value="" >
            </div>
            <div class="col-4"></div>
        </div>
        <div class="row mt-3">
            <div class="col-5"></div>
            <div class="checkbox mb-3 col-2">
                <input id="hhh" type="checkbox" value="remember-me"> Remember me     
            </div>
           <div class="col-5"></div>
        </div>
        <div class="row mx-4">
            <div class="col-4"></div>
            <div id = "signupbtn" class=" col-4 btn btn-lg btn-primary btn-block">Sign UP</div> 
            <div class="col-4"></div>
        </div>
    </form>
    <h3 id = "msg" class = "m-5"></h3>

    <footer>    
           <p class=" mt-5 mb-3 text-muted text-center">© Group 1</p>
    </footer>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="function_js\signup.js"></script>
</body>
</html>