<?php
    session_start();
    include ("conn.php");
    echo "<br>";
    $conn->select_db("LDBFashion");

    $sql="SELECT * FROM LDItems";
    $result=$conn->query($sql);
?>

<html>
    <head></head>
    <body>
        <h2>Clothing Items</h2>
        <?php
            $date=date("Y-m-j");
            echo "Discount on:<".$date.">";
            

            echo "<table border=1>
                <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Discount Amount</th>
                    <th>Discount Available/Not</th>
                </tr>";

                while($row=$result->fetch_assoc()){
                    $dis=($row['Price'] * $row['Discount'])/100;
                    $status = ($row['discountClose'] >= $date) ? "Available" : "Not Available";

                    echo "<tr> ";
                            echo"<td>".$row['Iname']."</td>";
                            echo"<td>".$row['Price']."</td>";
                            echo"<td>".$dis."</td>";
                            echo "<td>".$status."</td>";
                    echo "</tr>";
                   
                }
            
        ?>
    </body>
</html>