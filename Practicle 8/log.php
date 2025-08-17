

<?php
    session_start();
    include "conn.php";
    $conn->select_db("emarketing");

    if(isset($_POST['login'])){
        $username = $_POST['name'];
        $password = $_POST['pwd'];

        $sql = $conn->prepare("SELECT * FROM user WHERE username=?");
        $sql->bind_param("s",$username);
        $sql->execute();
        $result = $sql->get_result();


        if($row = $result->fetch_assoc()){
            if(password_verify($password,$row['password'])){
                $_SESSION['username']=$row['username'];
                $_SESSION['role']=$row['role'];
                $_SESSION['userid']=$row['userid'];
                
                if($row['role'] === 'seller'){
                    header("Location: additem.php");
                }elseif($row['role'] === 'buyer'){
                    header("Location: viewitem.html");

                }else{
                    header("Location: log.html");
                }
            }
        }else{
            echo "Invalid username or password";
            header("Location: log.html");
        }

    }
?>


















