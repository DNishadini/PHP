<?php
// delete_rec.php
include("conn.php");

$conn->select_db("jobseekers");

$sql = "DELETE FROM personal_info";

if ($conn->query($sql) === TRUE) {
    echo "All records deleted successfully";
} else {
    echo "Error deleting records: " . $conn->error;
}

$conn->close();
?>
