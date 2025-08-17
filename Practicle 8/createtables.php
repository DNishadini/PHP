<?php
    include "conn.php";
    $conn->select_db("emarketing");

    $sql1="CREATE TABLE IF NOT EXISTS item(
            itemcode varchar(20) not NULL primary key,
            itemname varchar(50),
            price decimal(10,2),
            seller varchar(50)) ";

    if(!$conn->query($sql1)){
        die("Error creating item table".$conn->error);
    }else{
        echo "Item table creating successfully";
    }

    $sql2="CREATE TABLE IF NOT EXISTS user(
            userid int(10) auto_increment not NULL primary key,
            username varchar(50),
            password varchar(100),
            role varchar(50)) ";

    if(!$conn->query($sql2)){
        die("Error creating user table".$conn->error);
    }else{
        echo "User table creating successfully";
    }

    
    $sql3="CREATE TABLE IF NOT EXISTS cart(
            buyerid varchar(30),
            itemname varchar(50),
            sellerid varchar(50)) ";

    if(!$conn->query($sql3)){
        die("Error creating cart table".$conn->error);
    }else{
        echo "Cart table creating successfully";
    }

?>