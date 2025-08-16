<?php
    $severname="localhost";
    $username="root";
    $password="";

    $conn = mysqli_connect($severname,$username,$password);

    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }else{
        echo "Connection successfully";
    }
?>