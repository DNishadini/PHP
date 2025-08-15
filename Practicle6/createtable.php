<?php
    include("conn.php");
    echo "<br>";

    $conn->select_db("jobseekers");

    $sql="CREATE TABLE IF NOT EXISTS personal_info(
    id int not NULL auto_increment primary key,
    title varchar(50),
    name varchar(100),
    gender varchar(10),
    dateofbirths date)";

    if($conn->query($sql) == true){
        echo "Table created successfully";
    }else{
        echo "Error creating table: ".$conn->error;
    }

    $conn->close();
?>