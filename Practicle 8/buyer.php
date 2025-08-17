    <?php
        session_start(); 
        include 'conn.php';
        $conn->select_db("emarketing");

        $sql = "SELECT * FROM item";
        $result = $conn->query($sql);
    ?>

    <!DOCTYPE html>
    <html>
        <head></head>
        <body>
            <input type='button' name='signout' value='Sign Out'><br>
            <a href=profile.html>Profile</a>
            
        


    <?php
        echo "<table border='1'>
            <tr>
                <th>Item Code</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Seller</th>
                <th></th>
            </tr>
        ";
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row['itemcode'] . "</td>";
            echo "<td>" . $row['itemname'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['seller'] . "</td>";


            echo "<td>
                <form action='buy.php' methode='post'>
                    <input type='hidden' name='name' value='" . $row['itemcode'] . "'>
                    <input type='hidden' name='price' value='" . $row['itemname'] . "'>
                    <input type='hidden' name='name' value='" . $row['price'] . "'>
                    <input type='hidden' name='price' value='" . $row['seller'] . "'>
                    
                    <input type='submit' name='submit' value='Buy'>
                </form>
            </td>";
        }
        echo "</table>";
    ?>
</body>
</html

      







<?php /*
    session_start(); 
    include 'conn.php';
    mysqli_select_db($conn, 'eshop');
    

    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>You Login As <?php echo $_SESSION['role']; ?></h2>   

    <form action="logout.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>

    <h1>Available Products</h1>
    <?php
        echo "<table border='1'>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        ";
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row['pname'] . "</td>";
            echo "<td>" . $row['uprice'] . "</td>";
            echo "<td>
                <form action='order.php' methode='post'>
                    <input type='hidden' name='name' value='" . $row['pname'] . "'>
                    <input type='hidden' name='price' value='" . $row['uprice'] . "'>
                    <input type='submit' name='order' value='Order'>
                </form>
            </td>";
        }
        echo "</table>";
   */ ?>
