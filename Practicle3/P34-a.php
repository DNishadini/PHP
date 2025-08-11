<?php
// Step 1: Create a multidimensional array
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

// --- Method 1: Direct access using indexes ---
echo $cars[0][0] . " " . $cars[0][1] . " " . $cars[0][2];
echo "<br><br>";

// --- Method 2: Using nested for loops ---
for ($row = 0; $row < 4; $row++) {      // loop through rows
    for ($col = 0; $col < 3; $col++) {  // loop through columns
        echo $cars[$row][$col] . " ";
    }
    echo "<br>";
}
echo "<br>";

// --- Method 3: Using nested foreach loops ---
echo "method 3 <br>";
foreach ($cars as $row) {       // loop through each row
    foreach ($row as $cell) {   // loop through each cell in row
        echo $cell . " ";
    }
    echo "<br>";
}
?>
