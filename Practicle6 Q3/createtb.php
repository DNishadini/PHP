<?php
include('conn.php');

// Create the database first
$sql = "CREATE DATABASE IF NOT EXISTS LIBRARY";
if ($conn->query($sql) === TRUE) {
    echo "Database LIBRARY created successfully.<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the created database
$conn->select_db("LIBRARY");

// Create the table BOOKS
$sql = "CREATE TABLE IF NOT EXISTS BOOKS (
   BOOK_ID INT PRIMARY KEY,
   AUTHOR VARCHAR(100),
   BOOK_NAME VARCHAR(100),
   ISBN_NO VARCHAR(20)
)";
if ($conn->query($sql) === TRUE) {
    echo "TABLE BOOKS created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
