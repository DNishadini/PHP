<?php
    include("conn.php");
    echo "<br>";
    $sql="CREATE DATABASE IF NOT EXISTS jobseekers";

    if($conn->query($sql) == true){
        echo "Database created successfully";
    }else{
        echo "Error creating database: ".$conn->error;
    }

    $conn->close();
?>
