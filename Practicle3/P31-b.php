<?php
// Donation amounts
$donations = array(12, 34, 45, 34, 48, 35, 15, 87, 40, 68, 34);

// Number of students who donated
$numStudents = count($donations);
echo "Number of students who donated: " . $numStudents . "<br><br>";

// Sort in ascending order
sort($donations);

echo "Donations in ascending order: <br>";
foreach ($donations as $amount) {
    echo $amount . "<br>";
}
?>
