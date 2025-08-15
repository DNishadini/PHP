<?php
// delete_table.php
include("conn.php");

$conn->select_db("jobseekers");

$sql = "DROP TABLE personal_info";

if ($conn->query($sql) === TRUE) {
    echo "Table 'personal_info' deleted successfully";
} else {
    echo "Error deleting table: " . $conn->error;
}

$conn->close();
?>
