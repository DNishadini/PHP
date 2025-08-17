<!DOCTYPE html>
<html>
    <body>
        <?php
            session_start();
            include "conn.php";
            $conn->select_db("emarketing");
            if(isset($_POST['submit'])){

                $icode=$_POST['code'];
                $iname=$_POST['name'];
                $price=$_POST['price'];
                $seller = $_SESSION['userid'];
                
                $sql1 = $conn->prepare("INSERT INTO item(itemcode,itemname,price,seller) VALUES (?,?,?,?)");
                $sql1->bind_param("ssss", $icode, $iname,$price,$seller);

                if ($sql1->execute()) {
                    echo "Data ADD Successfully";
                } else {
                    echo "Error inserting data: " . $conn->error;
                }
            }

            $conn->close();

            
        ?>
        <form action="" method="post">
        <input type="button" name="signout" value="Sign Out"><br><br>
        <a href=viewitem.php>View Item</a><br><br>
        <a href=profile.html>Profile</a><br><br><br>

        Item Code:<input type="text" name="code"><br>
        Item Name:<input type="text" name="name"><br>
        Price:<input type="text" name="price"><br>

        <input type="submit" name="submit" value="Submit Query">


    </body>
</html>