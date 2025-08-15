<?php
include("conn.php");
$conn->select_db("LIBRARY");

if (isset($_POST["submit"])) {
    $bookid   = $_POST["bookid"];
    $author   = $_POST["author"];
    $bookname = $_POST["bookname"];
    $isbn     = $_POST["isbn"];

    $stmt = $conn->prepare("INSERT INTO BOOKS (BOOK_ID, AUTHOR, BOOK_NAME, ISBN_NO) VALUES (?,?,?,?)");
    $stmt->bind_param("isss", $bookid, $author, $bookname, $isbn);

    if ($stmt->execute()) {
        echo "Book inserted successfully<br>";
        echo "<a href='insertform.html'>Insert Another</a>";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}
$conn->close();
?>
