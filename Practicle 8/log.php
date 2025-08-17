

<?php
    session_start();
    include "conn.php";
    $conn->select_db("emarketing");

    if(isset($_POST['log'])){
        $username = $_POST['name'];
        $password = $_POST['pwd'];

        $sql = $conn->prepare("SELECT * FROM user WHERE username=? AND password=?");
        $sql->bind_param("ss",$username,$password);
        $sql->execute();
        $result = $sql->get_result();


        if($row = $result->fetch_assoc()){
            $_SESSION['username']=$row['username'];
            $_SESSION['role']=$row['role'];

             if($row['role'] == 'seller'){
                header("Location: additem.html");
             }elseif($row['role'] == 'buyer'){
                header("Location: viewitem.html");

             }else{
                header("Location: log.html");
             }
        }else{
            echo "Invalid username or password";
            header("Location: log.html");
        }

    }
?>


















