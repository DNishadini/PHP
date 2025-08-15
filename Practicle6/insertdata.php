<?php
    include("conn.php");

    $conn->select_db("jobseekers");

    $sql="SELECT * FROM personal_info";
    $result=$conn->query($sql);

    if($result->num_rows > 0){
        echo "<table border=1>";
        echo "<h2>JOB Seekers</h2>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            </tr>
        ";

        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>".$row['dateofbirths']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "No records found";
    }


?>