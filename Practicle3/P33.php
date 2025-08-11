<?php
// Step 1: Create associative array with names as keys and ages as values
$age = array(
    "Sajani" => 78,
    "Gayani" => 56,
    "Menali" => 85,
    "Ruvini" => 42
);

// Step 2: Loop through the array and print name with age
foreach ($age as $name => $years) {
    echo $name . " is " . $years . " years old.<br>";
}
?>
