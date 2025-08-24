<?php
    include ("conn.php");
    echo "<br>";
    $sql="CREATE DATABASE IF NOT EXISTS LDBFashion";

    if($conn->query($sql)==true){
        echo "Database creating succsess";
    }else{
        echo "Database creating error".$conn->error;
    }
    $conn->close();
?>