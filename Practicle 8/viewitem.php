<?php
    include("conn.php");
    echo "<br><br>";

    $conn->select_db("emarketing");

    $sql="SELECT itemcode,itemname,price FROM item";
    $result=$conn->query($sql);

    echo "<input type='button' name='signout' value='Sign Out'><br>";
    echo "<a href=profile.html>Profile</a><br>";
    echo "<a href=additem.php>Add item page</a><br>";

    if($result->num_rows > 0){
        echo "<table border=1>";
        echo "
        <tr>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Price</th>
            
        </tr>
        ";

        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row['itemcode']."</td>";
            echo "<td>".$row['itemname']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "No records found";
    }


?>