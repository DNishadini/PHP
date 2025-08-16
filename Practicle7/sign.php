<?php
    session_start();
    include "conn.php";
    $conn->select_db("ESHOP");
    if(isset($_POST["sign"])){
        

        $uid = $_POST['id'];
        $uname = $_POST['name'];
        $pass = $_POST['pwd'];
        $Role = $_POST['role'];
        

        $sql1 = $conn->prepare("INSERT INTO user(Uid,Uname,Pwd,Role) VALUES (?,?,?,?)");
        $sql1->bind_param("ssss",$uid,$uname,$pass,$Role);

        if($sql1->execute()){
            echo "Data insert Table 1 Ssuccessfully";
        }else{
            echo "Error inserting data: ".$conn->error;
        }
        
        $conn->close();
    }
?>