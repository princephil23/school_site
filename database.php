<?php
     $conn =  mysqli_connect(
        'localhost', //ip adress or local host 192.168.0.191
        'root',             //user name default is root
        '',             // password default blank
        'project');        // name of database
    
         // Check connection
//          if ($conn->connect_error) {
//          die("Connection failed: " . $conn->connect_error);
// }
        if(!$conn) {
            // Code to handle the case where connection is not established
           // echo "Connection to database failed";
        }
        else{
           // echo'Successfully connected to database'; //used for testing
        }
?>