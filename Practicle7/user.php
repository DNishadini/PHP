    <?php
        session_start(); 
        include 'conn.php';
        $conn->select_db("ESHOP");

        $sql = "SELECT * FROM product";
        $result = $conn->query($sql);
    ?>

    <!DOCTYPE html>
    <html>
        <head></head>
        <body>
            <h2>You Login As <?php echo $_SESSION['Role']; ?></h2>   
            <form method="post">
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
            echo "<td>" . $row['Pname'] . "</td>";
            echo "<td>" . $row['Uprice'] . "</td>";
            echo "<td>
                <form action='order.php' methode='post'>
                    <input type='hidden' name='name' value='" . $row['Pname'] . "'>
                    <input type='hidden' name='price' value='" . $row['Uprice'] . "'>
                    <input type='submit' name='order' value='Order'>
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
