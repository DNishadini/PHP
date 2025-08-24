<?php
    include ("conn.php");
    echo "<br>";
    $conn->select_db("LDBFashion");

    $sql1="INSERT INTO LDItems(Icode,Iname,Price,discount,discountClose) VALUES 
    ('P001', 'Cotton Saree', 4300.00, 10, '2025-10-31'),
    ('P002', 'Long Sleeve Shirt', 3500.00, 5, '2025-11-15'),
    ('P003', 'Ladies Casual Frock', 3250.00, 8, '2024-10-07'),
    ('P004', 'Cotton Short', 2000.00, 5, '2025-12-31')";

    $sql2="INSERT INTO User (Uid, Uname, Pwd, Role) VALUES 
    ('A1', 'Admin', 'A1pwd', 'admin'),
    ('B1', 'Nilmi', 'B1pwd', 'buyer')";

    if($conn->query($sql1)==true){
        echo "Data Insert for table 1 success";
    }else{
        echo "Creating error".$conn->error;
    }

    if($conn->query($sql2)==true){
        echo "Data Insert for table 2 success";
    }else{
        echo "Creating error".$conn->error;
    }

    $conn->close();
?>