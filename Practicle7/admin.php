<?php
    session_start();
    include "conn.php";
    $conn->select_db("ESHOP");
    if (isset($_POST["add"])) {


        $Pname = $_POST['pname'];
        $Uprice = $_POST['price'];



        $sql1 = $conn->prepare("INSERT INTO product(Pname,Uprice) VALUES (?,?)");
        $sql1->bind_param("ss", $Pname, $Uprice);

        if ($sql1->execute()) {
            echo "Data insert Table 2 Successfully";
        } else {
            echo "Error inserting data: " . $conn->error;
        }

       // $conn->close();
    }
?>

