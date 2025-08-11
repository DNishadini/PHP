<?php
// Step 1: Create multidimensional array
$results = array(
    "Amal"  => array("Maths" => 80, "Science" => 75, "English" => 90),
    "Kamal" => array("Maths" => 60, "Science" => 65, "English" => 70),
    "Nimal" => array("Maths" => 55, "Science" => 70, "English" => 60)
);

// Step 2: Display marks and calculate total per student
echo "<b>Student Results:</b><br>";
foreach ($results as $name => $subjects) {
    $total = 0;
    echo "$name: ";
    foreach ($subjects as $subject => $mark) {
        echo "$subject = $mark, ";
        $total += $mark;
    }
    echo "Total = $total<br>";
}