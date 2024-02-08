<?php
    include('database.php');
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    $stId  = mysqli_real_escape_string($conn, $_POST['stId']);
    $stPin = password_hash($_POST['stPin']) ;//for securoty purposes;

    // php validation
    //checking weather he is a user ot not
    $fetchUsers = "SELECT * FROM `students` WHERE id = '$stId' AND passcode = '$stPin' LIMIT  1 ";
    $run_fetchUsers = mysqli_query($conn, $fetchUsers) or die (mysqli_error($conn));
    $countUsers = mysqli_num_rows($run_fetchUsers);
    if($countUsers == 1){
        console.log('User successfully Loggedin'); 
        echo "<span class=\"alert alert-success\">Login Successful</span>";
        //header("location: main.php");
        echo "<br/><br/> <a href='main.php'>Continue</a>";
    }
    else{
       
       
             echo"<span class = \"alert alert-danger\">Incorect Student Id or Student Pin</span>";
            
    }
       
    
?>