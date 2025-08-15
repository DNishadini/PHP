<?php
    include("conn.php");
    $conn->select_db("jobseekers");

    $sql="UPDATE personal_info SET title='Mrs' where id=3";

    if($conn->query($sql)==true){
        echo "Updated successfully";
    }else{
        echo "Error updating record: ".$conn->error;
    }
    $conn->close();
?>