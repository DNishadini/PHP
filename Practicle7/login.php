<?php
    session_start();
    include "conn.php";
    $conn->select_db("ESHOP");

    if(isset($_POST['login'])){
        $username = $_POST['name'];
        $password = $_POST['pwd'];

        $sql = $conn->prepare("SELECT * FROM user WHERE Uname=? AND Pwd=?");
        $sql->bind_param("ss",$username,$password);
        $sql->execute();
        $result = $sql->get_result();

        if($row = $result->fetch_assoc()){
            $_SESSION['Uname']=$row['Uname'];
            $_SESSION['Role']=$row['Role'];

             if($row['Role'] == 'admin'){
                header("Location: admin.php");
             }elseif($row['Role'] == 'buyer'){
                header("Location: user.php");

             }else{
                header("Location: sign.php");
             }
        }else{
            echo "Invalid username or password";
            header("Location: login.html");
        }
    }
?>