<?php
    session_start();
    include ("conn.php");
    echo "<br>";
    $conn->select_db("LDBFashion");

    $error = "";


    if(isset($_POST['submit'])){
        $uname = $_POST['name'];
        $pass= $_POST['pwd'];

        $sql=$conn->prepare("SELECT * FROM User where Uname=? AND Pwd=?");
        $sql->bind_param("ss",$uname,$pass);
        $sql->execute();
        $result=$sql->get_result();

        if($row=$result->fetch_assoc()){
            $_SESSION['username'] = $row['Uname'];
            $_SESSION['role'] = $row['Role'];

            if($row['Role']=="buyer"){
                header("Location:view.php");
            }else{
                $error = "Only buyers can view discount items.";
            }
        }else{
            $error = "Invalid Username or Password!";
        }

    }
?>