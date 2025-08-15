<?php
include("conn.php");
$conn->select_db("LIBRARY");

if (isset($_POST['bookid'])) {
    $id = $_POST['bookid'];

    $sql = "DELETE FROM BOOKS WHERE BOOK_ID=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully<br>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    echo "<a href='displaybooks.php'>Go Back</a>";
}
$conn->close();
?>
