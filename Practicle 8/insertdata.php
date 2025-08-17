<?php
    session_start();
    include "conn.php";
    $conn->select_db("emarketing");

    $uname1="Buyer";
    $pass1="buyer123";
    $role1="buyer";

    $uname2="Seller";
    $pass2="seller123";
    $role2="seller";

    $hashpass1=password_hash($pass1,PASSWORD_BCRYPT);
    $hashpass2=password_hash($pass2,PASSWORD_BCRYPT);

    $sql1=$conn->prepare("INSERT INTO user(username,password,role) values (?,?,?)");
    $sql1->bind_param("sss",$uname1,$hashpass1,$role1);


    if($sql1->execute()){
            echo "Row1 data insert successfully";
        }else{
            echo "Error inserting data: ".$conn->error;
        }
    
    $sql2=$conn->prepare("INSERT INTO user(username,password,role) values (?,?,?)");
    $sql2->bind_param("sss",$uname2,$hashpass2,$role2);

        if($sql2->execute()){
            echo "Row2 data insert successfully";
        }else{
            echo "Error inserting data: ".$conn->error;
        }
        
        $conn->close();
    

?>


