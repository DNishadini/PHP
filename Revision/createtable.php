<?php
    include ("conn.php");
    echo "<br>";
    $conn->select_db("LDFashion");

    $sql1="CREATE TABLE IF NOT EXISTS LDItems(
            Icode varchar(20) not null primary key,
            Iname varchar(100),
            Price decimal(10,2),
            Discount int,
            discountClose date)";

    if($conn->query($sql1)==true){
        echo "Data Insert for table 1 success";
    }else{
        echo "Creating error".$conn->error;
    }

    $sql2="CREATE TABLE IF NOT EXISTS LDItems(
            Uid varchar(20) not null primary key,
            Uname varchar(50),
            Pwd varchar(50),
            Role varchar(50))";
    echo "<br>";

    if($conn->query($sql2)==true){
        echo "Data Insert for table 2 success";
    }else{
        echo "Creating error".$conn->error;
    }

    $conn->close();
?>