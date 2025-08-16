<?php
    include("conn.php");
    $sql ="CREATE DATABASE IF NOT EXISTS ESHOP";

    if($conn->query($sql)==true){
        echo "Database created succesfully";
    }else{
        echo "Error in craeting database".$conn->error;
    }
    $conn->close();
?>