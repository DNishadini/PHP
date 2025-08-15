<?php
    include "conn.php";
    $conn->select_db("jobseekers");
    
    if(isset($_POST['sign'])){
        $title = $_POST['title'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        
        $sql = $conn->prepare("INSERT INTO personal_info(title,name,gender,dateofbirths) VALUES (?,?,?,?)");
        $sql->bind_param("ssss",$title,$name,$gender,$dob);

        if($sql->execute()){
            echo "Data insert successfully";
        }else{
            echo "Error inserting data: ".$conn->error;
        }
        
        $conn->close();
    }
?>