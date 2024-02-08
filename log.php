<?php
    include('database.php');
?>

<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" >

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
<body class="text-center mt-5">
    <form class="form-login">
        <img class="mb-4" src="img/10.png" alt="" width="400" height="100">
        <h1 class="h3 mb-3 font-weight-normal">CPEN.SES </h1>
        <div class=" mt-4 row ">
            <p>Provide your Details below. <code>(this was given to you in your admisssion letter)</code></p>
            <div class="col-5"></div>
            <div class="form-label-group col-2">
                <input type="int" maxlength="8" size="8" id="inputid" class="form-control" placeholder="Student ID" required="" autofocus="">
                <label for="inputid"></label>
          </div>
            <div class="col-5"></div>
        </div>
        <div class="mt-3 row">
            <div class="col-5"></div>
            <div class="form-label-group col-2">
                 <input type="password" maxlength="8" size="8" id="inputpin" class="form-control" placeholder="Pin" required="">
                 <label for="inputpin"></label>
            </div>
            <div class="col-"></div>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="checkbox mb-3 col-2">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                 </label>
           </div>
           <div class="col-5"></div>
        </div>
    
            <div class="btn btn-lg btn-primary btn-block" id="loginbtn" >Log in</div>

    </form>

       

    <h5 id = "msg" class = "my-4 mx-2"></h5>

    <footer>    
           <p class="mt-5 mb-3 text-muted text-center">© Group 1</p>
    </footer>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="function_js/login.js" ></script>
</body>
</html>