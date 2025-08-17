<?php
    include "conn.php";
    $sql="CREATE DATABASE IF NOT EXISTS emarketing";

    if($conn->query($sql) == true){
        echo "Database created successfully";
    }else{
        echo "Error in creating database".$conn->error;
    }
    $conn->close();
?>