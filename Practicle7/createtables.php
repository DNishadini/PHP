<?php
    include ("conn.php");

    $conn->select_db("ESHOP");
    $sql1="CREATE TABLE IF NOT EXISTS user(
    Uid varchar(10) not NULL primary key,
    Uname varchar(50),
    Pwd varchar(50),
    Role varchar(50) )";

    if($conn->query($sql1)==true){
        echo "Table 1 craeted successfully";
    }else{
        echo "Table1 created an error".$conn->error."<br><br>";
    }
    echo "<br>";
    $sql2="CREATE TABLE IF NOT EXISTS product(
    Pid int(10) not NULL auto_increment primary key,
    Pname varchar(50),
    Uprice float(10,2))";

    if($conn->query($sql2)==true){
        echo "Table2 craeted successfully";
    }else{
        echo "Table2 created an error".$conn->error."<br><br>";
    }


?>