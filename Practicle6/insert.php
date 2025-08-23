<?php
    include("conn.php");
    echo "<br>";


    $conn->select_db("jobseekers");

    $sql="INSERT INTO personal_info (title,name,gender,dateofbirths) VALUES (
    ('Ms.', 'K. Sedara',  'F', '1980-11-02'),
    ('Mr.',  'S. Alwis',   'M', '1969-03-03'),
    ('Prof.', 'A. Perera', 'F', '1982-04-14'))";

    if($conn->query($sql)==true){
        echo "Records inserted successfully";
    }else{
        echo "Error inserting records ".$conn->error;
    }

    $conn->close();

?>