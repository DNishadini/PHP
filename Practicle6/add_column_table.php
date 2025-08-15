<?php
    include("conn.php");
    $conn->select_db("jobseekers");
    $sql="ALTER TABLE personal_info ADD age INT";

    if ($conn->query($sql) === TRUE) {
        echo "Column 'age' added successfully";
    } else {
        echo "Error adding column: " . $conn->error;
    }

    $conn->close();
    
?>