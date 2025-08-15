<?php
include("conn.php");
$conn->select_db("LIBRARY");

$result = $conn->query("SELECT * FROM BOOKS");

echo "<h2>Books List</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr>
       <th>BOOK ID</th>
       <th>AUTHOR</th>
       <th>BOOK NAME</th>
       <th>ISBN NO</th>
       <th>Action</th>
     </tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['BOOK_ID']."</td>
                <td>".$row['AUTHOR']."</td>
                <td>".$row['BOOK_NAME']."</td>
                <td>".$row['ISBN_NO']."</td>
                <td>
                    <form action='updatebook.php' method='post' style='display:inline-block;'>
                      <input type='hidden' name='bookid' value='".$row["BOOK_ID"]."'>
                      <input type='submit' value='Update'>
                    </form>
                    <form action='deletebook.php' method='post' style='display:inline-block;'>
                      <input type='hidden' name='bookid' value='".$row["BOOK_ID"]."'>
                      <input type='submit' value='Delete'>
                    </form>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No data found</td></tr>";
}
echo "</table>";

$conn->close();
?>
