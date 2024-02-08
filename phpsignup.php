<?php
    include('database.php');
    
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $studentmail = mysqli_real_escape_string($conn, $_POST['studentmail']);
    $id  = mysqli_real_escape_string($conn, $_POST['id']);
    $passcode = password_hash($_POST['passcode']) ;//for securoty purposes
    $number = mysqli_real_escape_string($conn, $_POST['number']);

    // php validation
    //checking weather he is a user ot not
    $fetchUsers = "SELECT * FROM `students` WHERE id = '$id'  LIMIT  1 ";
    $run_fetchUsers = mysqli_query($conn, $fetchUsers) or die (mysqli_error($conn));
    $countUsers = mysqli_num_rows($run_fetchUsers);
    if($countUsers == 1){
        // echco "<span class = "alert alert-danger">User already exists</span>";
        echo "<span class=\"alert alert-danger\">User already exists</span>";
        console.log('User already exists');
    }
    else{
        //inert new user to databse
        $insertQuery = "INSERT INTO `students` (id, fname, lname, phone, mail, passcode, level,date_registered ) 
                        VALUES('$id', '$firstname', '$lastname', ' $number', ' $studentmail','$passcode', 100 , NOW()) ";
        $run_Query = mysqli_query($conn, $insertQuery)   or die (mysqli_error($conn));
        if($run_Query){
             echo"<span class = \"alert alert-success\">User successfully Signed Up</span>";
              echo "<br/><br/> <a href='main.php'>Continue</a>";
             console.log('User successfully Signed Up');  
        }
        else{
             echo"<span class =\"alert alert-danger \">Failed to sign User up</span>";
             console.log('Failed to sign User up');
        }
    } 
?>